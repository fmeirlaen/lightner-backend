<?php

namespace TF\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use TF\ApiBundle\Entity\tab_contact;
use FOS\RestBundle\Controller\Annotations as Rest;
use TF\ApiBundle\Form\ContactType;
use Symfony\Component\HttpFoundation\Response;


class ContactApiController extends FOSRestController
{
    /**
     * @Rest\View()
     * @Rest\Post(path="/addContact")
     */
    public function postContactAction(Request $request)
    {
        $contact = new tab_contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->submit($request->request->all());

        if ($form->isValid() && $form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();
            return $contact;
        }
        return $form;

    }

    /**
     * @Rest\View()
     * @Rest\Get(path="/contact/{stamptab_contact}")
     */
    public function getContactAction($stamptab_contact)
    {
        $contact = $this->getDoctrine()->getRepository('TFApiBundle:tab_contact')->find($stamptab_contact);
        return $contact;
    }

    /**
     * @return array
     * @Rest\View()
     * @Rest\Get(path="/contacts")
     */
    public function getContactsAction()
    {
        $contacts = $this->getDoctrine()->getRepository('TFApiBundle:tab_contact')->findAll();
        return $contacts;
    }

    /**
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Delete(path="/contact/{stamptab_contact}", requirements={"stamptab_contact" : "\d*"})
     */
    public function deleteContactAction($stamptab_contact)
    {
        /** @var tab_contact $contact */
        $em = $this->getDoctrine()->getManager();
        $contact = $em->getRepository('TF\ApiBundle\Entity\tab_contact')->findOneBy(['stamptab_contact' => $stamptab_contact]);
        if ($contact != null) {
            $em->remove($contact);
            $em->flush();
        }
    }

    /**
     * @param Request $request
     * @return View|Form|tab_contact
     * @Rest\View()
     * @Rest\Put(path="/contact/{stamptab_contact}", requirements={"stamptab_contact" : "\d*"})
     */
    public function putContactAction(Request $request, $stamptab_contact)
    {
        /** @var tab_contact $contact */
        $contact = $this->getDoctrine()->getRepository('TFApiBundle:tab_contact')->findOneBy(['stamptab_contact' => $stamptab_contact]);
        $form = $this->createForm(ContactType::class, $contact);
        $form->setData($contact);
        $form->submit($request->request->all());

        if ($form->isValid() && $form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $contact;
        }
        return $form;
    }
}