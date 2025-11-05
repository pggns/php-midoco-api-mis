<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementFeeStaggerDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementFeeStaggerDTO extends AbstractStructBase
{
    /**
     * The feeId
     * @var int|null
     */
    protected ?int $feeId = null;
    /**
     * The minAmount
     * @var int|null
     */
    protected ?int $minAmount = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The staggerId
     * @var int|null
     */
    protected ?int $staggerId = null;
    /**
     * Constructor method for UmbrellaSettlementFeeStaggerDTO
     * @uses UmbrellaSettlementFeeStaggerDTO::setFeeId()
     * @uses UmbrellaSettlementFeeStaggerDTO::setMinAmount()
     * @uses UmbrellaSettlementFeeStaggerDTO::setPrice()
     * @uses UmbrellaSettlementFeeStaggerDTO::setStaggerId()
     * @param int $feeId
     * @param int $minAmount
     * @param float $price
     * @param int $staggerId
     */
    public function __construct(?int $feeId = null, ?int $minAmount = null, ?float $price = null, ?int $staggerId = null)
    {
        $this
            ->setFeeId($feeId)
            ->setMinAmount($minAmount)
            ->setPrice($price)
            ->setStaggerId($staggerId);
    }
    /**
     * Get feeId value
     * @return int|null
     */
    public function getFeeId(): ?int
    {
        return $this->feeId;
    }
    /**
     * Set feeId value
     * @param int $feeId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeStaggerDTO
     */
    public function setFeeId(?int $feeId = null): self
    {
        // validation for constraint: int
        if (!is_null($feeId) && !(is_int($feeId) || ctype_digit($feeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feeId, true), gettype($feeId)), __LINE__);
        }
        $this->feeId = $feeId;
        
        return $this;
    }
    /**
     * Get minAmount value
     * @return int|null
     */
    public function getMinAmount(): ?int
    {
        return $this->minAmount;
    }
    /**
     * Set minAmount value
     * @param int $minAmount
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeStaggerDTO
     */
    public function setMinAmount(?int $minAmount = null): self
    {
        // validation for constraint: int
        if (!is_null($minAmount) && !(is_int($minAmount) || ctype_digit($minAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minAmount, true), gettype($minAmount)), __LINE__);
        }
        $this->minAmount = $minAmount;
        
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeStaggerDTO
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
        return $this;
    }
    /**
     * Get staggerId value
     * @return int|null
     */
    public function getStaggerId(): ?int
    {
        return $this->staggerId;
    }
    /**
     * Set staggerId value
     * @param int $staggerId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeStaggerDTO
     */
    public function setStaggerId(?int $staggerId = null): self
    {
        // validation for constraint: int
        if (!is_null($staggerId) && !(is_int($staggerId) || ctype_digit($staggerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($staggerId, true), gettype($staggerId)), __LINE__);
        }
        $this->staggerId = $staggerId;
        
        return $this;
    }
}
