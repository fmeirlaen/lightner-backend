<?php

namespace TF\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tab_user
 *
 * @ORM\Table(name="tab_user")
 * @ORM\Entity(repositoryClass="TF\ApiBundle\Repository\tab_userRepository")
 */
class tab_user
{
    /**
     * @var int
     *
     * @ORM\Column(name="stamptab_contact", type="integer")
     * @ORM\Id
     *
     */
    private $stamptab_contact;

    /**
     * @ORM\OneToOne(targetEntity="TF\ApiBundle\Entity\tab_contact")
     * @ORM\JoinColumn(name="stamptab_contact", referencedColumnName="stamptab_contact")
     */
    private $tab_contact;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=65)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="string", length=255)
     */
    private $userPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="user_image", type="string", length=255)
     */
    private $userImage;

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return tab_user
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userName
     *
     * @param string $userName
     *
     * @return tab_user
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set userPassword
     *
     * @param string $userPassword
     *
     * @return tab_user
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    /**
     * Get userPassword
     *
     * @return string
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Set userImage
     *
     * @param string $userImage
     *
     * @return tab_user
     */
    public function setUserImage($userImage)
    {
        $this->userImage = $userImage;

        return $this;
    }

    /**
     * Get userImage
     *
     * @return string
     */
    public function getUserImage()
    {
        return $this->userImage;
    }

    /**
     * @return int
     */
    public function getStamptabContact()
    {
        return $this->stamptab_contact;
    }

    /**
     * @param int $stamptab_contact
     */
    public function setStamptabContact($stamptab_contact)
    {
        $this->stamptab_contact = $stamptab_contact;
    }

    /**
     * @return mixed
     */
    public function getTabContact()
    {
        return $this->tab_contact;
    }

    /**
     * @param mixed $tab_contact
     */
    public function setTabContact($tab_contact)
    {
        $this->tab_contact = $tab_contact;
    }
}

