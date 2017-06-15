<?php

namespace TF\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tab_contact
 *
 * @ORM\Table(name="tab_contact")
 * @ORM\Entity(repositoryClass="TF\ApiBundle\Repository\tab_contactRepository")
 */
class tab_contact
{
    /**
     * @var int
     *
     * @ORM\Column(name="stamptab_contact", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $stamptab_contact;

    /**
     * @ORM\OneToOne(targetEntity="TF\ApiBundle\Entity\tab_user")
     * @ORM\JoinColumn(name="stamptab_contact", referencedColumnName="stamptab_contact")
     */
    private $tab_user;

    /**
     * @ORM\ManyToOne(targetEntity="TF\ApiBundle\Entity\tab_country")
     * @ORM\JoinColumn(name="stamptab_country", referencedColumnName="stamptab_country")
     */
    private $stamptab_country;
    /**
     * @var int
     *
     * @ORM\Column(name="contact_number", type="integer", unique=true)
     */
    private $contactNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_fs_name", type="string", length=50)
     */
    private $contactFsName;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_ls_name", type="string", length=50)
     */
    private $contactLsName;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_comercial_name", type="string", length=100, nullable=true)
     */
    private $contactComercialName;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_address", type="string", length=255, nullable=true)
     */
    private $contactAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_codpost", type="string", length=50, nullable=true)
     */
    private $contactCodpost;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_city", type="string", length=45, nullable=true)
     */
    private $contactCity;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_type", type="string", length=50)
     */
    private $contactType;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_vat_number", type="string", length=50, nullable=true)
     */
    private $contactVatNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_amount", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $contactAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_tab_vat", type="string", length=50, nullable=true)
     */
    private $contactTabVat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="contact_date_creation", type="datetime")
     */
    private $contactDateCreation;


    /**
     * Get id
     *
     * @return int
     */
    public function getStamptab_contact()
    {
        return $this->stamptab_contact;
    }

    /**
     * Set contactNumber
     *
     * @param integer $contactNumber
     *
     * @return tab_contact
     */
    public function setContactNumber($contactNumber)
    {
        $this->contactNumber = $contactNumber;

        return $this;
    }

    /**
     * Get contactNumber
     *
     * @return int
     */
    public function getContactNumber()
    {
        return $this->contactNumber;
    }

    /**
     * Set contactFsName
     *
     * @param string $contactFsName
     *
     * @return tab_contact
     */
    public function setContactFsName($contactFsName)
    {
        $this->contactFsName = $contactFsName;

        return $this;
    }

    /**
     * Get contactFsName
     *
     * @return string
     */
    public function getContactFsName()
    {
        return $this->contactFsName;
    }

    /**
     * Set contactLsName
     *
     * @param string $contactLsName
     *
     * @return tab_contact
     */
    public function setContactLsName($contactLsName)
    {
        $this->contactLsName = $contactLsName;

        return $this;
    }

    /**
     * Get contactLsName
     *
     * @return string
     */
    public function getContactLsName()
    {
        return $this->contactLsName;
    }

    /**
     * Set contactComercialName
     *
     * @param string $contactComercialName
     *
     * @return tab_contact
     */
    public function setContactComercialName($contactComercialName)
    {
        $this->contactComercialName = $contactComercialName;

        return $this;
    }

    /**
     * Get contactComercialName
     *
     * @return string
     */
    public function getContactComercialName()
    {
        return $this->contactComercialName;
    }

    /**
     * Set contactAddress
     *
     * @param string $contactAddress
     *
     * @return tab_contact
     */
    public function setContactAddress($contactAddress)
    {
        $this->contactAddress = $contactAddress;

        return $this;
    }

    /**
     * Get contactAddress
     *
     * @return string
     */
    public function getContactAddress()
    {
        return $this->contactAddress;
    }

    /**
     * Set contactCodpost
     *
     * @param string $contactCodpost
     *
     * @return tab_contact
     */
    public function setContactCodpost($contactCodpost)
    {
        $this->contactCodpost = $contactCodpost;

        return $this;
    }

    /**
     * Get contactCodpost
     *
     * @return string
     */
    public function getContactCodpost()
    {
        return $this->contactCodpost;
    }

    /**
     * Set contactCity
     *
     * @param string $contactCity
     *
     * @return tab_contact
     */
    public function setContactCity($contactCity)
    {
        $this->contactCity = $contactCity;

        return $this;
    }

    /**
     * Get contactCity
     *
     * @return string
     */
    public function getContactCity()
    {
        return $this->contactCity;
    }

    /**
     * Set contactType
     *
     * @param string $contactType
     *
     * @return tab_contact
     */
    public function setContactType($contactType)
    {
        $this->contactType = $contactType;

        return $this;
    }

    /**
     * Get contactType
     *
     * @return string
     */
    public function getContactType()
    {
        return $this->contactType;
    }

    /**
     * Set contactVatNumber
     *
     * @param string $contactVatNumber
     *
     * @return tab_contact
     */
    public function setContactVatNumber($contactVatNumber)
    {
        $this->contactVatNumber = $contactVatNumber;

        return $this;
    }

    /**
     * Get contactVatNumber
     *
     * @return string
     */
    public function getContactVatNumber()
    {
        return $this->contactVatNumber;
    }

    /**
     * Set contactAmount
     *
     * @param string $contactAmount
     *
     * @return tab_contact
     */
    public function setContactAmount($contactAmount)
    {
        $this->contactAmount = $contactAmount;

        return $this;
    }

    /**
     * Get contactAmount
     *
     * @return string
     */
    public function getContactAmount()
    {
        return $this->contactAmount;
    }

    /**
     * Set contactTabVat
     *
     * @param integer $contactTabVat
     *
     * @return tab_contact
     */
    public function setContactTabVat($contactTabVat)
    {
        $this->contactTabVat = $contactTabVat;

        return $this;
    }

    /**
     * Get contactTabVat
     *
     * @return int
     */
    public function getContactTabVat()
    {
        return $this->contactTabVat;
    }

    /**
     * Set contactDateCreation
     *
     * @param \DateTime $contactDateCreation
     *
     * @return tab_contact
     */
    public function setContactDateCreation($contactDateCreation)
    {
        $this->contactDateCreation = $contactDateCreation;

        return $this;
    }

    /**
     * Get contactDateCreation
     *
     * @return \DateTime
     */
    public function getContactDateCreation()
    {
        return $this->contactDateCreation;
    }

    /**
     * @return mixed
     */
    public function getTabUser()
    {
        return $this->tab_user;
    }

    /**
     * @param mixed $tab_user
     */
    public function setTabUser($tab_user)
    {
        $this->tab_user = $tab_user;
    }
}

