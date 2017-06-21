<?php
/**
 * User: fred
 * Date: 20/06/2017
 * Time: 11:38
 */

namespace TF\MainBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TF\ApiBundle\Entity\tab_user;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $Users = array(
            array('1', 'admin', 'admin', '/img/admin.jpg'),
            array('2', 'user', 'user', '/img/user.jpg'),
            array('3', 'Khun', 'ly', '/img/khun.jpg')
        );
        $contacts = $manager->getRepository('TFApiBundle:tab_contact');

        foreach ($Users as $u => $User) {
            $c = $contacts->findBy(array("contact_fs_name" => $User[1]))[0];
            $newUser = new tab_user();
            $newUser->setUserId($User[0]);
            $newUser->setUserName($User[1]);
            $newUser->setUserPassword($User[2]);
            $newUser->setUserImage($User[3]);
            $newUser->setTabContact($c);
            $newUser->setStamptabContact($c->getStamptab_contact());
            $manager->persist($newUser);
        }
        $manager->flush();
    }
}
?>