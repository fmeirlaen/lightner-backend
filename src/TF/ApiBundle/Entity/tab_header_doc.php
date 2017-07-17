<?php

namespace TF\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Type as Type;

/**
 * tab_header_doc
 *
 * @ORM\Table(name="tab_header_doc")
 * @ORM\Entity(repositoryClass="TF\ApiBundle\Repository\tab_header_docRepository")
 */
class tab_header_doc
{
    /**
     * @var int
     *
     * @ORM\Column(name="stamptab_header_doc", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $stamptab_header_doc;


    /**
     *
     * @Type("array<TF\ApiBundle\Entity\tab_line_doc>")
     * @var array
     * @ORM\OneToMany(targetEntity="TF\ApiBundle\Entity\tab_line_doc", mappedBy="tab_header_doc", cascade={"persist", "remove"})
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $lines;

    /**
     * @ORM\ManyToOne(targetEntity="TF\ApiBundle\Entity\tab_contact")
     * @ORM\JoinColumn(name="stamptab_contact", referencedColumnName="stamptab_contact")
     */
    private $tab_contact;

    /**
     * @var string
     *
     * @Type("string")
     *
     * @ORM\Column(name="contact_name", type="string", length=100)
     */
    private $contact_name;

    /**
     * @var string
     *
     * @Type("string")
     *
     * @ORM\Column(name="contact_address", type="string", length=100)
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
     * @ORM\Column(name="contact_country", type="string", length=45, nullable=true)
     */
    private $contact_country;

    /**
     * @var \DateTime
     *
     * @Type("DateTime<'Y-m-d H:i:s'>")
     *
     * @ORM\Column(name="doc_date", type="date")
     */
    private $doc_date;

    /**
     * @var \DateTime
     *
     * @Type("DateTime<'Y-m-d H:i:s'>")
     *
     * @ORM\Column(name="doc_date_paid", type="date", nullable=true)
     */
    private $doc_date_paid;

    /**
     * @var string
     *
     * @Type("string")
     *
     * @ORM\Column(name="doc_reference", type="string", length=100, nullable=true)
     */
    private $doc_reference;

    /**
     * @var string
     *
     * @Type("float")
     *
     * @ORM\Column(name="doc_total", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $doc_total;

    /**
     * @var bool
     *
     * @Type("boolean")
     *
     * @ORM\Column(name="doc_paid", type="boolean")
     */
    private $doc_paid;

    /**
     * @var string
     *
     * @Type("float")
     *
     * @ORM\Column(name="doc_total_vat", type="decimal", precision=10, scale=2)
     */
    private $doc_total_vat;

    /**
     * @var int
     *
     * @Type("int")
     *
     * @ORM\Column(name="doc_number", type="integer")
     */
    private $doc_number;

    /**
     * @var int
     *
     * @Type("int")
     *
     * @ORM\Column(name="doc_year", type="integer")
     */
    private $doc_year;

    /**
     * @var string
     *
     * @Type("string")
     *
     * @ORM\Column(name="doc_type", type="string", length=60)
     */
    private $doc_type;

    /**
     * @var string
     *
     * @Type("string")
     *
     * @ORM\Column(name="contact_city", type="string", length=50, nullable=true)
     */
    private $contact_city;



    /**
     * Set contactName
     *
     * @param string $contactName
     *
     * @return tab_header_doc
     */
    public function setContactName($contactName)
    {
        $this->contact_name = $contactName;

        return $this;
    }

    /**
     * Get contactName
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->contact_name;
    }

    /**
     * Set contactAddress
     *
     * @param string $contactAddress
     *
     * @return tab_header_doc
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
     * @return tab_header_doc
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
     * Set contactCountry
     *
     * @param string $contactCountry
     *
     * @return tab_header_doc
     */
    public function setContactCountry($contactCountry)
    {
        $this->contact_country = $contactCountry;

        return $this;
    }

    /**
     * Get contactCountry
     *
     * @return string
     */
    public function getContactCountry()
    {
        return $this->contact_country;
    }

    /**
     * Set docDate
     *
     * @param \DateTime $docDate
     *
     * @return tab_header_doc
     */
    public function setDocDate($docDate)
    {
        $this->doc_date = $docDate;

        return $this;
    }

    /**
     * Get docDate
     *
     * @return \DateTime
     */
    public function getDocDate()
    {
        return $this->doc_date;
    }

    /**
     * Set docDatePaid
     *
     * @param \DateTime $docDatePaid
     *
     * @return tab_header_doc
     */
    public function setDocDatePaid($docDatePaid)
    {
        $this->doc_date_paid = $docDatePaid;

        return $this;
    }

    /**
     * Get docDatePaid
     *
     * @return \DateTime
     */
    public function getDocDatePaid()
    {
        return $this->doc_date_paid;
    }

    /**
     * Set docReference
     *
     * @param string $docReference
     *
     * @return tab_header_doc
     */
    public function setDocReference($docReference)
    {
        $this->doc_reference = $docReference;

        return $this;
    }

    /**
     * Get docReference
     *
     * @return string
     */
    public function getDocReference()
    {
        return $this->doc_reference;
    }

    /**
     * Set docTotal
     *
     * @param string $docTotal
     *
     * @return tab_header_doc
     */
    public function setDocTotal($docTotal)
    {
        $this->doc_total = $docTotal;

        return $this;
    }

    /**
     * Get docTotal
     *
     * @return string
     */
    public function getDocTotal()
    {
        return $this->doc_total;
    }

    /**
     * Set docPaid
     *
     * @param boolean $docPaid
     *
     * @return tab_header_doc
     */
    public function setDocPaid($docPaid)
    {
        $this->doc_paid = $docPaid;

        return $this;
    }

    /**
     * Get docPaid
     *
     * @return bool
     */
    public function getDocPaid()
    {
        return $this->doc_paid;
    }

    /**
     * Set docTotalVat
     *
     * @param string $docTotalVat
     *
     * @return tab_header_doc
     */
    public function setDocTotalVat($docTotalVat)
    {
        $this->doc_total_vat = $docTotalVat;

        return $this;
    }

    /**
     * Get docTotalVat
     *
     * @return string
     */
    public function getDocTotalVat()
    {
        return $this->doc_total_vat;
    }

    /**
     * Set docNumber
     *
     * @param integer $docNumber
     *
     * @return tab_header_doc
     */
    public function setDocNumber($docNumber)
    {
        $this->doc_number = $docNumber;

        return $this;
    }

    /**
     * Get docNumber
     *
     * @return int
     */
    public function getDocNumber()
    {
        return $this->doc_number;
    }

    /**
     * Set docYear
     *
     * @param integer $docYear
     *
     * @return tab_header_doc
     */
    public function setDocYear($docYear)
    {
        $this->doc_year = $docYear;

        return $this;
    }

    /**
     * Get docYear
     *
     * @return int
     */
    public function getDocYear()
    {
        return $this->doc_year;
    }

    /**
     * Set docType
     *
     * @param string $docType
     *
     * @return tab_header_doc
     */
    public function setDocType($docType)
    {
        $this->doc_type = $docType;

        return $this;
    }

    /**
     * Get docType
     *
     * @return string
     */
    public function getDocType()
    {
        return $this->doc_type;
    }

    /**
     * Set contactCity
     *
     * @param string $contactCity
     *
     * @return tab_header_doc
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
     * @return int
     */
    public function getStamptabHeaderDoc()
    {
        return $this->stamptab_header_doc;
    }

    /**
     * @return array
     */
    public function getLines()
    {
        return $this->lines;
    }


    /**
     * @param tab_line_doc $line
     */
    public function addLine(tab_line_doc $line){
        $this->lines[] = $line;
        $line->setTabHeaderDoc($this);
    }

    public function __construct()
    {
        $this->lines = array();
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

