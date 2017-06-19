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

        $lines= $doc->getLines();

        //dump($doc);die;

        foreach ($lines as $line){

            $line->setTabHeaderDoc($doc);

        }
//        dump($doc);die;
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