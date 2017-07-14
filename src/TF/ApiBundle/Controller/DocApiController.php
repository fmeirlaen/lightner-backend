<?php

namespace TF\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use JMS\Serializer\SerializerBuilder as JMS;
use TF\ApiBundle\Entity\tab_header_doc;

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

        foreach ($lines as $line){

            $line->setTabHeaderDoc($doc);

        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($doc);
        $em->flush();
    }
    /**
     * @Rest\View()
     */
    public function getDocAction($stamptab_header_doc)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('TF\ApiBundle\Entity\tab_header_doc')->find($stamptab_header_doc);
        //dump($repository);die;
        $serializer = JMS::create()->build();
        $serializer->serialize($repository, 'json');
        //dump($serializer);die;
        return array(
            'contact_name' => $repository->getContactName(),
            'contact_address'=> $repository->getContactAddress(),
            'contact_codpost' => $repository->getContactCodpost(),
            'contact_country' => $repository->getContactCountry(),
            'doc_date' => $repository->getDocDate(),
            'doc_date_paid' => $repository->getDocDatePaid(),
            'doc_reference' => $repository->getDocReference(),
            'doc_total' =>$repository->getDocTotal(),
            'doc_paid' => $repository->getDocPaid(),
            'doc_total_vat' => $repository->getDocTotalVat(),
            'doc_number' => $repository->getDocNumber(),
            'doc_year' => $repository->getDocYear(),
            'doc_type' => $repository->getDocType(),
            'contact_city' => $repository->getContactCity()

        );
    }

    public function deleteDocAction($stamptab_header_doc)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('TF\ApiBundle\Entity\tab_header_doc')->find($stamptab_header_doc);
        //delete le document qui correspond à l'id
        $serializer = JMS::create()->build();
        $serializer->serialize($repository, 'json');
    }

    //Modification d'un document
    public function putDocAction()
    {

    }
}