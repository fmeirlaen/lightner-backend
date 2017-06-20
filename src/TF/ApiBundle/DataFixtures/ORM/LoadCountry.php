<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 19/06/2017
 * Time: 10:51
 */

namespace TF\MainBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TF\ApiBundle\Entity\tab_country;

class LoadCountryData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {

    }
}
?>