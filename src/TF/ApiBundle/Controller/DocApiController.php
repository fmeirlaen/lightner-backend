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
        return $repository;
        //dump($repository);die;
        /*$serializer = JMS::create()->build();
        $serializer->serialize($repository, 'json');
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

        );*/
    }

    /*
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Delete(path="/doc/{docID}", requirements={"docID" : "\d*"})
     */
    public function deleteDocAction($stamptab_header_doc)
    {
        $em = $this->getDoctrine()->getManager();

        $doc = $em->getRepository('TF\ApiBundle\Entity\tab_header_doc')->find($stamptab_header_doc->get('stamptab_header_doc'));
        //delete le document qui correspond à l'id
        if ($doc !== null) {
            $em->remove($doc);
            $em->flush();
        }
    }

    //Modification d'un document
    /**
     * @param Request $request
     * @return Doc|View|Form
     *
     * @Rest\View()
     * @Rest\Put(path="/games/{gameID}", requirements={"gameID" : "\d*"})
     */
    public function putDocAction(Request $request)
    {
        return $this->handleDocData($request, false);
    }

    /**
     * @param Request $request
     * @param bool $add
     * @param bool $clearMissing
     * @return Doc|View|Form
     */
    private function handleDocData(Request $request, $add = true, $clearMissing = true)
    {
        $em = $this->getDoctrine()->getManager();

        if ($add) {
            $doc = new tab_header_doc();
        } else {
            $doc = $em->getRepository('TF\ApiBundle\Entity\tab_header_doc')->find($request->get('stamptab_header_doc'));

            if ($doc === null) {
                return View::create(array('message' => 'This doc does not exists !'), Response::HTTP_NOT_FOUND);
            }
        }

        $data = $request->request->all();
        $data['file'] = $request->files->get('file');

        $form = $this->createForm(DocType::class, $doc);
        $form->submit($data, $clearMissing);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($add) {
                $em->persist($doc);
            }

            $em->flush();
            return $doc;
        } else {
            return $form;
        }
    }

}