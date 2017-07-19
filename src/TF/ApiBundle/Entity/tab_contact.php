<?php

namespace TF\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Type as Type;
use Symfony\Component\Validator\Constraints\Country;

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
     *
     * @Type("int")
     * @var int
     */
    private $country_id;


    /**
     * @var tab_country
     *
     * @ORM\ManyToOne(targetEntity="TF\ApiBundle\Entity\tab_country")
     * @ORM\JoinColumn(name="stamptab_country", referencedColumnName="stamptab_country")
     */
    private $stamptab_country;


    /**
     * @var int
     *
     * @Type("int")
     * @ORM\Column(name="contact_number", type="integer", unique=true, nullable=true)
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
     * @Type("string")
     *
     * @ORM\Column(name="contact_comercial_name", type="string", length=100, nullable=true)
     */
    private $contact_comercial_name;

    /**
     * @var string
     *
     * @Type("string")
     *
     * @ORM\Column(name="contact_address", type="string", length=255, nullable=true)
     */
    private $contact_address;

    /**
     * @var string
     *
     * @Type("string")
     *
     * @ORM\Column(name="contact_codpost", type="string", length=50, nullable=true)
     */
    private $contact_codpost;

    /**
     * @var string
     *
     * @Type("string")
     *
     * @ORM\Column(name="contact_city", type="string", length=45, nullable=true)
     */
    private $contact_city;

    /**
     * @var string
     *
     * @Type("string")
     *
     * @ORM\Column(name="contact_type", type="string", length=50)
     */
    private $contact_type;

    /**
     * @var string
     *
     * @Type("string")
     *
     * @ORM\Column(name="contact_vat_number", type="string", length=50, nullable=true)
     */
    private $contact_vat_number;

    /**
     * @var string
     *
     * @Type("string")
     *
     * @ORM\Column(name="contact_amount", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $contact_amount;

    /**
     * @var string
     *
     * @Type("string")
     *
     * @ORM\Column(name="contact_tab_vat", type="string", length=50, nullable=true)
     */
    private $contact_tab_vat;

    /**
     * @var \DateTime
     *
     * @Type("DateTime<'Y-m-d H:i:s'>")
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
        $this->contact_amount = $contactAmount;

        return $this;
    }

    /**
     * Get contactAmount
     *
     * @return string
     */
    public function getContactAmount()
    {
        return $this->contact_amount;
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
        return $this->contact_tab_vat;
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
        $this->contact_date_creation = $contactDateCreation;

        return $this;
    }

    /**
     * Get contactDateCreation
     *
     * @return \DateTime
     */
    public function getContactDateCreation()
    {
        return $this->contact_date_creation;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
        return $this->country_id;
    }

    /**
     * @param int $country_id
     */
    public function setCountryId($country_id)
    {
        $this->country_id = $country_id;
    }

    /**
     * @return tab_country
     */
    public function getStamptabCountry()
    {
        return $this->stamptab_country;
    }

    /**
     * @param int $stamptab_country
     */
    public function setStamptabCountry($stamptab_country)
    {
        $this->stamptab_country = $stamptab_country;
    }


}

