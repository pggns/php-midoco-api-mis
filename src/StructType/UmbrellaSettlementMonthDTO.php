<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementMonthDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementMonthDTO extends AbstractStructBase
{
    /**
     * The created
     * @var string|null
     */
    protected ?string $created = null;
    /**
     * The createdBy
     * @var int|null
     */
    protected ?int $createdBy = null;
    /**
     * The modified
     * @var string|null
     */
    protected ?string $modified = null;
    /**
     * The modifiedBy
     * @var int|null
     */
    protected ?int $modifiedBy = null;
    /**
     * The month
     * @var int|null
     */
    protected ?int $month = null;
    /**
     * The settlementMonthId
     * @var int|null
     */
    protected ?int $settlementMonthId = null;
    /**
     * The year
     * @var int|null
     */
    protected ?int $year = null;
    /**
     * Constructor method for UmbrellaSettlementMonthDTO
     * @uses UmbrellaSettlementMonthDTO::setCreated()
     * @uses UmbrellaSettlementMonthDTO::setCreatedBy()
     * @uses UmbrellaSettlementMonthDTO::setModified()
     * @uses UmbrellaSettlementMonthDTO::setModifiedBy()
     * @uses UmbrellaSettlementMonthDTO::setMonth()
     * @uses UmbrellaSettlementMonthDTO::setSettlementMonthId()
     * @uses UmbrellaSettlementMonthDTO::setYear()
     * @param string $created
     * @param int $createdBy
     * @param string $modified
     * @param int $modifiedBy
     * @param int $month
     * @param int $settlementMonthId
     * @param int $year
     */
    public function __construct(?string $created = null, ?int $createdBy = null, ?string $modified = null, ?int $modifiedBy = null, ?int $month = null, ?int $settlementMonthId = null, ?int $year = null)
    {
        $this
            ->setCreated($created)
            ->setCreatedBy($createdBy)
            ->setModified($modified)
            ->setModifiedBy($modifiedBy)
            ->setMonth($month)
            ->setSettlementMonthId($settlementMonthId)
            ->setYear($year);
    }
    /**
     * Get created value
     * @return string|null
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }
    /**
     * Set created value
     * @param string $created
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementMonthDTO
     */
    public function setCreated(?string $created = null): self
    {
        // validation for constraint: string
        if (!is_null($created) && !is_string($created)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($created, true), gettype($created)), __LINE__);
        }
        $this->created = $created;
        
        return $this;
    }
    /**
     * Get createdBy value
     * @return int|null
     */
    public function getCreatedBy(): ?int
    {
        return $this->createdBy;
    }
    /**
     * Set createdBy value
     * @param int $createdBy
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementMonthDTO
     */
    public function setCreatedBy(?int $createdBy = null): self
    {
        // validation for constraint: int
        if (!is_null($createdBy) && !(is_int($createdBy) || ctype_digit($createdBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($createdBy, true), gettype($createdBy)), __LINE__);
        }
        $this->createdBy = $createdBy;
        
        return $this;
    }
    /**
     * Get modified value
     * @return string|null
     */
    public function getModified(): ?string
    {
        return $this->modified;
    }
    /**
     * Set modified value
     * @param string $modified
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementMonthDTO
     */
    public function setModified(?string $modified = null): self
    {
        // validation for constraint: string
        if (!is_null($modified) && !is_string($modified)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modified, true), gettype($modified)), __LINE__);
        }
        $this->modified = $modified;
        
        return $this;
    }
    /**
     * Get modifiedBy value
     * @return int|null
     */
    public function getModifiedBy(): ?int
    {
        return $this->modifiedBy;
    }
    /**
     * Set modifiedBy value
     * @param int $modifiedBy
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementMonthDTO
     */
    public function setModifiedBy(?int $modifiedBy = null): self
    {
        // validation for constraint: int
        if (!is_null($modifiedBy) && !(is_int($modifiedBy) || ctype_digit($modifiedBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifiedBy, true), gettype($modifiedBy)), __LINE__);
        }
        $this->modifiedBy = $modifiedBy;
        
        return $this;
    }
    /**
     * Get month value
     * @return int|null
     */
    public function getMonth(): ?int
    {
        return $this->month;
    }
    /**
     * Set month value
     * @param int $month
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementMonthDTO
     */
    public function setMonth(?int $month = null): self
    {
        // validation for constraint: int
        if (!is_null($month) && !(is_int($month) || ctype_digit($month))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($month, true), gettype($month)), __LINE__);
        }
        $this->month = $month;
        
        return $this;
    }
    /**
     * Get settlementMonthId value
     * @return int|null
     */
    public function getSettlementMonthId(): ?int
    {
        return $this->settlementMonthId;
    }
    /**
     * Set settlementMonthId value
     * @param int $settlementMonthId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementMonthDTO
     */
    public function setSettlementMonthId(?int $settlementMonthId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementMonthId) && !(is_int($settlementMonthId) || ctype_digit($settlementMonthId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementMonthId, true), gettype($settlementMonthId)), __LINE__);
        }
        $this->settlementMonthId = $settlementMonthId;
        
        return $this;
    }
    /**
     * Get year value
     * @return int|null
     */
    public function getYear(): ?int
    {
        return $this->year;
    }
    /**
     * Set year value
     * @param int $year
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementMonthDTO
     */
    public function setYear(?int $year = null): self
    {
        // validation for constraint: int
        if (!is_null($year) && !(is_int($year) || ctype_digit($year))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($year, true), gettype($year)), __LINE__);
        }
        $this->year = $year;
        
        return $this;
    }
}
