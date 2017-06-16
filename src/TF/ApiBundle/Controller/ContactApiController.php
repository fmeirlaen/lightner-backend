<?php

namespace TF\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use TF\ApiBundle\Entity\tab_contact;
use FOS\RestBundle\Controller\Annotations as Rest;
use JMS\SerializerBundle\JMSSerializerBundle ;
use JMS\Serializer\SerializerBuilder as JMS;


class ContactApiController extends FOSRestController
{
    /**
     * @Rest\View()
     */
    public function postContactAction(Request $request)
    {
        //dump($request->getContent());die;
        $serializer = JMS::create()->build();
        $contact = $serializer->deserialize($request->getContent(), 'TF\ApiBundle\Entity\tab_contact', 'json');
//        dump($contact);die;
        $em = $this->getDoctrine()->getManager();
        $em->persist($contact);
        $em->flush();
//        $contact = new tab_contact();
//        $contact->setContactLsName($request->get('contact_ls_name'));
//        dump($contact);die;

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