<?php

namespace TF\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_name", type="string", length=100)
     */
    private $contactName;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_address", type="string", length=100)
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
     * @ORM\Column(name="contact_country", type="string", length=45, nullable=true)
     */
    private $contactCountry;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="doc_date", type="date")
     */
    private $docDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="doc_date_paid", type="date")
     */
    private $docDatePaid;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_reference", type="string", length=100, nullable=true)
     */
    private $docReference;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_total", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $docTotal;

    /**
     * @var bool
     *
     * @ORM\Column(name="doc_paied", type="boolean")
     */
    private $docPaied;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_total_vat", type="decimal", precision=10, scale=2)
     */
    private $docTotalVat;

    /**
     * @var int
     *
     * @ORM\Column(name="doc_number", type="integer")
     */
    private $docNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="doc_year", type="integer")
     */
    private $docYear;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_type", type="string", length=60)
     */
    private $docType;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_city", type="string", length=50, nullable=true)
     */
    private $contactCity;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     *
     * @return tab_header_doc
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get contactName
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
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
     * @return tab_header_doc
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
     * Set contactCountry
     *
     * @param string $contactCountry
     *
     * @return tab_header_doc
     */
    public function setContactCountry($contactCountry)
    {
        $this->contactCountry = $contactCountry;

        return $this;
    }

    /**
     * Get contactCountry
     *
     * @return string
     */
    public function getContactCountry()
    {
        return $this->contactCountry;
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
        $this->docDate = $docDate;

        return $this;
    }

    /**
     * Get docDate
     *
     * @return \DateTime
     */
    public function getDocDate()
    {
        return $this->docDate;
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
        $this->docDatePaid = $docDatePaid;

        return $this;
    }

    /**
     * Get docDatePaid
     *
     * @return \DateTime
     */
    public function getDocDatePaid()
    {
        return $this->docDatePaid;
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
        $this->docReference = $docReference;

        return $this;
    }

    /**
     * Get docReference
     *
     * @return string
     */
    public function getDocReference()
    {
        return $this->docReference;
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
        $this->docTotal = $docTotal;

        return $this;
    }

    /**
     * Get docTotal
     *
     * @return string
     */
    public function getDocTotal()
    {
        return $this->docTotal;
    }

    /**
     * Set docPaied
     *
     * @param boolean $docPaied
     *
     * @return tab_header_doc
     */
    public function setDocPaied($docPaied)
    {
        $this->docPaied = $docPaied;

        return $this;
    }

    /**
     * Get docPaied
     *
     * @return bool
     */
    public function getDocPaied()
    {
        return $this->docPaied;
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
        $this->docTotalVat = $docTotalVat;

        return $this;
    }

    /**
     * Get docTotalVat
     *
     * @return string
     */
    public function getDocTotalVat()
    {
        return $this->docTotalVat;
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
        $this->docNumber = $docNumber;

        return $this;
    }

    /**
     * Get docNumber
     *
     * @return int
     */
    public function getDocNumber()
    {
        return $this->docNumber;
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
        $this->docYear = $docYear;

        return $this;
    }

    /**
     * Get docYear
     *
     * @return int
     */
    public function getDocYear()
    {
        return $this->docYear;
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
        $this->docType = $docType;

        return $this;
    }

    /**
     * Get docType
     *
     * @return string
     */
    public function getDocType()
    {
        return $this->docType;
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
}

