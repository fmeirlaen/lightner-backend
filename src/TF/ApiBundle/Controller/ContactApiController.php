<?php

namespace TF\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use TF\ApiBundle\Entity\tab_contact;
use FOS\RestBundle\Controller\Annotations as Rest;
use TF\ApiBundle\Form\ContactType;


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

    public function deleteContactAction($stamptab_contact)
    {

    }

    public function putContactAction($stamptab_contact)
    {

    }
}