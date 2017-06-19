<?php

namespace TF\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use TF\ApiBundle\Entity\tab_contact;
use FOS\RestBundle\Controller\Annotations as Rest;
use JMS\Serializer\SerializerBuilder as JMS;


class ContactApiController extends FOSRestController
{
    /**
     * @Rest\View()
     */
    public function postContactAction(Request $request)
    {
        $serializer = JMS::create()->build();
        $contact = $serializer->deserialize($request->getContent(), 'TF\ApiBundle\Entity\tab_contact', 'json');
        $em = $this->getDoctrine()->getManager();
        $em->persist($contact);
        $em->flush();

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