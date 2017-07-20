<?php

 namespace TF\ApiBundle\Controller;

 use FOS\RestBundle\Controller\FOSRestController;
 use TF\ApiBundle\Entity\User;
 use FOS\RestBundle\Controller\Annotations as Rest;

 class UserApiController extends FOSRestController
 {
     /**
      * @Rest\View()
      * @Rest\Get(path="/user")
      */
    public function getUsersAction()
    {
        $u = new User();
        $u->setEmail("test@test.be")->setLastName("test")->setPassword("test")->setInscriptionDate(new \DateTime());
        $u2 = new User();
        $u2->setEmail("admin@admin.be")->setLastname('admin')->setPassword('admin')->setInscriptiondate(new \DateTime());
        $users = array($u,$u2);
        return $users;
    }

    public function getUserAction($id)
    {

    }

    public function deleteUserAction($id)
    {

    }

    public function postUserAction($user)
    {

    }

    public function putUserAction($user)
    {

    }
 }