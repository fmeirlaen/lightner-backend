<?php

namespace TF\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use TF\ApiBundle\Entity\tab_contact;
use FOS\RestBundle\Controller\Annotations as Rest;
use JMS\SerializerBundle\JMSSerializerBundle as JMS;

class contactApiController extends FOSRestController
{
    /**
     * @Rest\View()
     * @JMS\serializer()
     */
    private function serialize($data)
    {
        return $this->container->get('jms_serializer')
            ->serialize($data, 'json');
    }

    private function deserialize($data)
    {
        return $this->container->get('jms_serializer')
            ->deserialize($data,'object','json');
    }

    public function createContact($jsonData)
    {
        $c = new tab_contact();
        $serializer = JMS::create()->build();
        $object = $serializer->deserialize($jsonData, 'MyNamespace\MyObject', 'json');

    }

    public function getContact($stamptab_contact)
    {

    }

    public function deleteContact($stamptab_contact)
    {

    }

    public function postContact($stamptab_contact)
    {

    }

    public function putContact($stamptab_contact)
    {

    }
}