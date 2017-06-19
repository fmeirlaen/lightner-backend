<?php

namespace TF\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Type as Type;

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
     * @ORM\ManyToOne(targetEntity="TF\ApiBundle\Entity\tab_header_doc", inversedBy="lines", cascade={"persist"})
     * @ORM\JoinColumn(name="stamptab_header_doc", referencedColumnName="stamptab_header_doc", nullable=false)
     */
    private $tab_header_doc;

    /**
     * @var \DateTime
     *
     * @Type("string")
     *
     * @ORM\Column(name="line_date", type="datetime", nullable=true)
     */
    private $line_date;

    /**
     * @var string
     *
     * @Type("string")
     *
     * @ORM\Column(name="line_cod", type="string", length=150, nullable=true)
     */
    private $line_cod;

    /**
     * @var string
     *
     * @Type("string")
     *
     * @ORM\Column(name="line_description", type="string", length=200)
     */
    private $line_description;

    /**
     * @var string
     *
     * @Type("string")
     *
     * @ORM\Column(name="line_qtt", type="decimal", precision=10, scale=2)
     */
    private $line_qtt;

    /**
     * @var string
     *
     * @Type("string")
     *
     * @ORM\Column(name="line_unit", type="string", length=4, nullable=true)
     */
    private $line_unit;

    /**
     * @var string
     *
     * @Type("string")
     *
     * @ORM\Column(name="line_price_unit", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $line_price_unit;

    /**
     * @var int
     *
     * @Type("int")
     *
     * @ORM\Column(name="line_disc1", type="integer", nullable=true)
     */
    private $line_disc1;

    /**
     * @var float
     *
     * @Type("float")
     *
     * @ORM\Column(name="line_vat", type="float", nullable=true)
     */
    private $line_vat;

    /**
     * @var string
     *
     * @Type("string")
     *
     * @ORM\Column(name="line_total", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $line_total;

    /**
     * @var int
     *
     * @Type("int")
     *
     * @ORM\Column(name="line_order", type="integer", nullable=true)
     */
    private $line_order;

    /**
     * @var \DateTime
     *
     * @Type("DateTime<'Y-m-d H:i:s'>")
     *
     * @ORM\Column(name="line_delivery_date", type="date", nullable=true)
     */
    private $line_delivery_date;


    /**
     * Get id
     *
     * @return int
     */
    public function getStamptab_line_doc()
    {
        return $this->stamptab_line_doc;
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
        $this->line_date = $lineDate;

        return $this;
    }

    /**
     * Get lineDate
     *
     * @return \DateTime
     */
    public function getLineDate()
    {
        return $this->line_date;
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
        $this->line_cod = $lineCod;

        return $this;
    }

    /**
     * Get lineCod
     *
     * @return string
     */
    public function getLineCod()
    {
        return $this->line_cod;
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
        $this->line_description = $lineDescription;

        return $this;
    }

    /**
     * Get lineDescription
     *
     * @return string
     */
    public function getLineDescription()
    {
        return $this->line_description;
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
        $this->line_qtt = $lineQtt;

        return $this;
    }

    /**
     * Get lineQtt
     *
     * @return string
     */
    public function getLineQtt()
    {
        return $this->line_qtt;
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
        $this->line_unit = $lineUnit;

        return $this;
    }

    /**
     * Get lineUnit
     *
     * @return string
     */
    public function getLineUnit()
    {
        return $this->line_unit;
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
        $this->line_price_unit = $linePriceUnit;

        return $this;
    }

    /**
     * Get linePriceUnit
     *
     * @return string
     */
    public function getLinePriceUnit()
    {
        return $this->line_price_unit;
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
        $this->line_disc1 = $lineDisc1;

        return $this;
    }

    /**
     * Get lineDisc1
     *
     * @return int
     */
    public function getLineDisc1()
    {
        return $this->line_disc1;
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
        $this->line_vat = $lineVat;

        return $this;
    }

    /**
     * Get lineVat
     *
     * @return float
     */
    public function getLineVat()
    {
        return $this->line_vat;
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
        $this->line_total = $lineTotal;

        return $this;
    }

    /**
     * Get lineTotal
     *
     * @return string
     */
    public function getLineTotal()
    {
        return $this->line_total;
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
        $this->line_order = $lineOrder;

        return $this;
    }

    /**
     * Get lineOrder
     *
     * @return int
     */
    public function getLineOrder()
    {
        return $this->line_order;
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
        $this->line_delivery_date = $lineDeliveryDate;

        return $this;
    }

    /**
     * Get lineDeliveryDate
     *
     * @return \DateTime
     */
    public function getLineDeliveryDate()
    {
        return $this->line_delivery_date;
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

