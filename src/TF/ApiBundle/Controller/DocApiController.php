<?php

namespace TF\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use JMS\Serializer\SerializerBuilder as JMS;

Class DocApiController extends FOSRestController
{
    /**
     * @Rest\View()
     */
    public function postDocAction(Request $request)
    {
        $serializer = JMS::create()->build();
        $doc = $serializer->deserialize($request->getContent(), 'TF\ApiBundle\Entity\tab_header_doc', 'json');
        $lines= $request->get('lines');
        foreach ($lines as $line){
            $l = $serializer->deserialize($line, 'TF\ApiBundle\Entity\tab_line_doc', 'json');
            $doc->addLine($l);
        }
        $em = $this->getDoctrine()->getManager();
        $em->persist($doc);
        $em->flush();
    }

    public function getDocAction()
    {

    }

    public function deleteDocAction()
    {

    }

    public function putDocAction()
    {

    }
}