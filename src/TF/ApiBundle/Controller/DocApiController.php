<?php

namespace TF\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use TF\ApiBundle\Entity\tab_header_doc;
use TF\ApiBundle\Form\DocType;
use Symfony\Component\HttpFoundation\Response;

Class DocApiController extends FOSRestController
{
    /**
     * @Rest\View()
     * @Rest\Post(path="/addDoc")
     */
    public function postDocAction(Request $request)
    {
        $doc = new tab_header_doc();
        $form = $this->createForm(DocType::class, $doc);
        $form->submit($request->request->all());

        if ($form->isValid() && $form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($doc);
            $em->flush();
            return $doc;
        }
        return $form;
    }

    /**
     * @Rest\View()
     * @Rest\Get(path="/doc/{stamptab_header_doc}")
     */
    public function getDocAction($stamptab_header_doc)
    {
        $doc = $this->getDoctrine()->getManager()->getRepository('TFApiBundle:tab_header_doc')->find($stamptab_header_doc);
        return $doc;
    }

    /**
     * @return array
     * @Rest\View()
     * @Rest\Get(path="/docs")
     */
    public function getDocsAction()
    {
        $docs = $this->getDoctrine()->getRepository('TFApiBundle:tab_header_doc')->findAll();
        return $docs;
    }

    /**
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Delete(path="/doc/{stamptab_header_doc}", requirements={"stamptab_header_doc" : "\d*"})
     */
    public function deleteDocAction($stamptab_header_doc)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var tab_header_doc $doc */
        $doc = $em->getRepository('TF\ApiBundle\Entity\tab_header_doc')->findOneBy(['stamptab_header_doc' => $stamptab_header_doc]);
        if ($doc != null) {
            $em->remove($doc);
            $em->flush();
        }
    }

    //Modification d'un document
    /**
     * @param Request $request
     * @return View|Form | tab_header_doc
     * @Rest\View()
     * @Rest\Put(path="/doc/{stamptab_header_doc}", requirements={"stamptab_header_doc" : "\d*"})
     */
    public function putDocAction(Request $request, $stamptab_header_doc)
    {
        /** @var tab_header_doc $doc */
        $doc = $this->getDoctrine()->getRepository('TFApiBundle:tab_header_doc')->findOneBy(['stamptab_header_doc' => $stamptab_header_doc]);
        $form = $this->createForm(DocType::class, $doc);
        $form->setData($doc);
        $form->submit($request->request->all());

        if ($form->isValid() && $form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $doc;
        }
        return $form;
    }



}