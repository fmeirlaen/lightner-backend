<?php

namespace TF\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use TF\ApiBundle\Entity\tab_contact;
use FOS\RestBundle\Controller\Annotations as Rest;


class ContactApiController extends FOSRestController
{
    /**
     * @Rest\View()
     * @Rest\Post(path="/addContact")
     */
    public function postContactAction(Request $request)
    {
        $doc = new tab_contact();
        $form = $this->createForm(ContactType::class, $doc);
        $form->submit($request->request->all());

        if ($form->isValid() && $form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($doc);
            $em->flush();
            return $doc;
        }
        return $form;
        /*$serializer = JMS::create()->build();
        $contact = $serializer->deserialize($request->getContent(), 'TF\ApiBundle\Entity\tab_contact', 'json');

        $em = $this->getDoctrine()->getManager();
        $country = $this->getDoctrine()->getRepository("TFApiBundle:tab_country")->find($contact->getCountryId());
        $contact->setStamptabCountry($country);
        $em->persist($contact);
        $em->flush();*/

    }

    public function getContactAction($stamptab_contact)
    {

    }

    public function deleteContactAction($stamptab_contact)
    {

    }

    public function putContactAction($stamptab_contact)
    {

    }
}