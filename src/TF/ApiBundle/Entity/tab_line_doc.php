<?php

namespace TF\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tab_line_doc
 *
 * @ORM\Table(name="tab_line_doc")
 * @ORM\Entity(repositoryClass="TF\ApiBundle\Repository\tab_line_docRepository")
 */
class tab_line_doc
{
    /**
     * @var int
     *
     * @ORM\Column(name="stamptab_line_doc", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $stamptab_line_doc;

    /**
     * @ORM\ManyToOne(targetEntity="TF\ApiBundle\Entity\tab_header_doc")
     * @ORM\JoinColumn(name="stamptab_header_doc", referencedColumnName="stamptab_header_doc")
     */
    private $tab_header_doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="line_date", type="datetime", nullable=true)
     */
    private $lineDate;

    /**
     * @var string
     *
     * @ORM\Column(name="line_cod", type="string", length=150, nullable=true)
     */
    private $lineCod;

    /**
     * @var string
     *
     * @ORM\Column(name="line_description", type="string", length=200)
     */
    private $lineDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="line_qtt", type="decimal", precision=10, scale=2)
     */
    private $lineQtt;

    /**
     * @var string
     *
     * @ORM\Column(name="line_unit", type="string", length=4, nullable=true)
     */
    private $lineUnit;

    /**
     * @var string
     *
     * @ORM\Column(name="line_price_unit", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $linePriceUnit;

    /**
     * @var int
     *
     * @ORM\Column(name="line_disc1", type="integer", nullable=true)
     */
    private $lineDisc1;

    /**
     * @var float
     *
     * @ORM\Column(name="line_vat", type="float", nullable=true)
     */
    private $lineVat;

    /**
     * @var string
     *
     * @ORM\Column(name="line_total", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $lineTotal;

    /**
     * @var int
     *
     * @ORM\Column(name="line_order", type="integer", nullable=true)
     */
    private $lineOrder;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="line_delivery_date", type="date", nullable=true)
     */
    private $lineDeliveryDate;


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
     * Set lineDate
     *
     * @param \DateTime $lineDate
     *
     * @return tab_line_doc
     */
    public function setLineDate($lineDate)
    {
        $this->lineDate = $lineDate;

        return $this;
    }

    /**
     * Get lineDate
     *
     * @return \DateTime
     */
    public function getLineDate()
    {
        return $this->lineDate;
    }

    /**
     * Set lineCod
     *
     * @param string $lineCod
     *
     * @return tab_line_doc
     */
    public function setLineCod($lineCod)
    {
        $this->lineCod = $lineCod;

        return $this;
    }

    /**
     * Get lineCod
     *
     * @return string
     */
    public function getLineCod()
    {
        return $this->lineCod;
    }

    /**
     * Set lineDescription
     *
     * @param string $lineDescription
     *
     * @return tab_line_doc
     */
    public function setLineDescription($lineDescription)
    {
        $this->lineDescription = $lineDescription;

        return $this;
    }

    /**
     * Get lineDescription
     *
     * @return string
     */
    public function getLineDescription()
    {
        return $this->lineDescription;
    }

    /**
     * Set lineQtt
     *
     * @param string $lineQtt
     *
     * @return tab_line_doc
     */
    public function setLineQtt($lineQtt)
    {
        $this->lineQtt = $lineQtt;

        return $this;
    }

    /**
     * Get lineQtt
     *
     * @return string
     */
    public function getLineQtt()
    {
        return $this->lineQtt;
    }

    /**
     * Set lineUnit
     *
     * @param string $lineUnit
     *
     * @return tab_line_doc
     */
    public function setLineUnit($lineUnit)
    {
        $this->lineUnit = $lineUnit;

        return $this;
    }

    /**
     * Get lineUnit
     *
     * @return string
     */
    public function getLineUnit()
    {
        return $this->lineUnit;
    }

    /**
     * Set linePriceUnit
     *
     * @param string $linePriceUnit
     *
     * @return tab_line_doc
     */
    public function setLinePriceUnit($linePriceUnit)
    {
        $this->linePriceUnit = $linePriceUnit;

        return $this;
    }

    /**
     * Get linePriceUnit
     *
     * @return string
     */
    public function getLinePriceUnit()
    {
        return $this->linePriceUnit;
    }

    /**
     * Set lineDisc1
     *
     * @param integer $lineDisc1
     *
     * @return tab_line_doc
     */
    public function setLineDisc1($lineDisc1)
    {
        $this->lineDisc1 = $lineDisc1;

        return $this;
    }

    /**
     * Get lineDisc1
     *
     * @return int
     */
    public function getLineDisc1()
    {
        return $this->lineDisc1;
    }

    /**
     * Set lineVat
     *
     * @param float $lineVat
     *
     * @return tab_line_doc
     */
    public function setLineVat($lineVat)
    {
        $this->lineVat = $lineVat;

        return $this;
    }

    /**
     * Get lineVat
     *
     * @return float
     */
    public function getLineVat()
    {
        return $this->lineVat;
    }

    /**
     * Set lineTotal
     *
     * @param string $lineTotal
     *
     * @return tab_line_doc
     */
    public function setLineTotal($lineTotal)
    {
        $this->lineTotal = $lineTotal;

        return $this;
    }

    /**
     * Get lineTotal
     *
     * @return string
     */
    public function getLineTotal()
    {
        return $this->lineTotal;
    }

    /**
     * Set lineOrder
     *
     * @param integer $lineOrder
     *
     * @return tab_line_doc
     */
    public function setLineOrder($lineOrder)
    {
        $this->lineOrder = $lineOrder;

        return $this;
    }

    /**
     * Get lineOrder
     *
     * @return int
     */
    public function getLineOrder()
    {
        return $this->lineOrder;
    }

    /**
     * Set lineDeliveryDate
     *
     * @param \DateTime $lineDeliveryDate
     *
     * @return tab_line_doc
     */
    public function setLineDeliveryDate($lineDeliveryDate)
    {
        $this->lineDeliveryDate = $lineDeliveryDate;

        return $this;
    }

    /**
     * Get lineDeliveryDate
     *
     * @return \DateTime
     */
    public function getLineDeliveryDate()
    {
        return $this->lineDeliveryDate;
    }

    /**
     * @return mixed
     */
    public function getTabHeaderDoc()
    {
        return $this->tab_header_doc;
    }

    /**
     * @param mixed $tab_header_doc
     */
    public function setTabHeaderDoc($tab_header_doc)
    {
        $this->tab_header_doc = $tab_header_doc;
    }
}

