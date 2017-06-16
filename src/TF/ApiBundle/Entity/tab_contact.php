<?php

namespace TF\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Type as Type;

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
    private $contact_number;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_fs_name", type="string", length=50)
     *
     * @Type("string")
     */
    private $contact_fs_name;

    /**
     * @var string
     *
     * @Type("string")
     *
     * @ORM\Column(name="contact_ls_name", type="string", length=50)
     */
    private $contact_ls_name;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_comercial_name", type="string", length=100, nullable=true)
     */
    private $contact_comercial_name;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_address", type="string", length=255, nullable=true)
     */
    private $contact_address;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_codpost", type="string", length=50, nullable=true)
     */
    private $contact_codpost;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_city", type="string", length=45, nullable=true)
     */
    private $contact_city;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_type", type="string", length=50)
     */
    private $contact_type;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_vat_number", type="string", length=50, nullable=true)
     */
    private $contact_vat_number;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_amount", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $contact_amount;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_tab_vat", type="string", length=50, nullable=true)
     */
    private $contact_tab_vat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="contact_date_creation", type="datetime")
     */
    private $contact_date_creation;


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
        $this->contact_number = $contactNumber;

        return $this;
    }

    /**
     * Get contactNumber
     *
     * @return int
     */
    public function getContactNumber()
    {
        return $this->contact_number;
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
        $this->contact_fs_name = $contactFsName;

        return $this;
    }

    /**
     * Get contactFsName
     *
     * @return string
     */
    public function getContactFsName()
    {
        return $this->contact_fs_name;
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
        $this->contact_ls_name = $contactLsName;

        return $this;
    }

    /**
     * Get contactLsName
     *
     * @return string
     */
    public function getContactLsName()
    {
        return $this->contact_ls_name;
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
        $this->contact_comercial_name = $contactComercialName;

        return $this;
    }

    /**
     * Get contactComercialName
     *
     * @return string
     */
    public function getContactComercialName()
    {
        return $this->contact_comercial_name;
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
        $this->contact_address = $contactAddress;

        return $this;
    }

    /**
     * Get contactAddress
     *
     * @return string
     */
    public function getContactAddress()
    {
        return $this->contact_address;
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
        $this->contact_codpost = $contactCodpost;

        return $this;
    }

    /**
     * Get contactCodpost
     *
     * @return string
     */
    public function getContactCodpost()
    {
        return $this->contact_codpost;
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
        $this->contact_city = $contactCity;

        return $this;
    }

    /**
     * Get contactCity
     *
     * @return string
     */
    public function getContactCity()
    {
        return $this->contact_city;
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
        $this->contact_type = $contactType;

        return $this;
    }

    /**
     * Get contactType
     *
     * @return string
     */
    public function getContactType()
    {
        return $this->contact_type;
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
        $this->contact_vat_number = $contactVatNumber;

        return $this;
    }

    /**
     * Get contactVatNumber
     *
     * @return string
     */
    public function getContactVatNumber()
    {
        return $this->contact_vat_number;
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

