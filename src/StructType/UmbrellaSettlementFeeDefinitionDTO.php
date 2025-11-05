<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementFeeDefinitionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementFeeDefinitionDTO extends AbstractStructBase
{
    /**
     * The addByDefault
     * @var bool|null
     */
    protected ?bool $addByDefault = null;
    /**
     * The basePrice
     * @var float|null
     */
    protected ?float $basePrice = null;
    /**
     * The batchAmount
     * @var int|null
     */
    protected ?int $batchAmount = null;
    /**
     * The batchPrice
     * @var float|null
     */
    protected ?float $batchPrice = null;
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
     * The feeDefinitionId
     * @var int|null
     */
    protected ?int $feeDefinitionId = null;
    /**
     * The feeType
     * @var string|null
     */
    protected ?string $feeType = null;
    /**
     * The includedAmount
     * @var int|null
     */
    protected ?int $includedAmount = null;
    /**
     * The isBaseFee
     * @var bool|null
     */
    protected ?bool $isBaseFee = null;
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
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The percentage
     * @var float|null
     */
    protected ?float $percentage = null;
    /**
     * Constructor method for UmbrellaSettlementFeeDefinitionDTO
     * @uses UmbrellaSettlementFeeDefinitionDTO::setAddByDefault()
     * @uses UmbrellaSettlementFeeDefinitionDTO::setBasePrice()
     * @uses UmbrellaSettlementFeeDefinitionDTO::setBatchAmount()
     * @uses UmbrellaSettlementFeeDefinitionDTO::setBatchPrice()
     * @uses UmbrellaSettlementFeeDefinitionDTO::setCreated()
     * @uses UmbrellaSettlementFeeDefinitionDTO::setCreatedBy()
     * @uses UmbrellaSettlementFeeDefinitionDTO::setFeeDefinitionId()
     * @uses UmbrellaSettlementFeeDefinitionDTO::setFeeType()
     * @uses UmbrellaSettlementFeeDefinitionDTO::setIncludedAmount()
     * @uses UmbrellaSettlementFeeDefinitionDTO::setIsBaseFee()
     * @uses UmbrellaSettlementFeeDefinitionDTO::setModified()
     * @uses UmbrellaSettlementFeeDefinitionDTO::setModifiedBy()
     * @uses UmbrellaSettlementFeeDefinitionDTO::setName()
     * @uses UmbrellaSettlementFeeDefinitionDTO::setPercentage()
     * @param bool $addByDefault
     * @param float $basePrice
     * @param int $batchAmount
     * @param float $batchPrice
     * @param string $created
     * @param int $createdBy
     * @param int $feeDefinitionId
     * @param string $feeType
     * @param int $includedAmount
     * @param bool $isBaseFee
     * @param string $modified
     * @param int $modifiedBy
     * @param string $name
     * @param float $percentage
     */
    public function __construct(?bool $addByDefault = null, ?float $basePrice = null, ?int $batchAmount = null, ?float $batchPrice = null, ?string $created = null, ?int $createdBy = null, ?int $feeDefinitionId = null, ?string $feeType = null, ?int $includedAmount = null, ?bool $isBaseFee = null, ?string $modified = null, ?int $modifiedBy = null, ?string $name = null, ?float $percentage = null)
    {
        $this
            ->setAddByDefault($addByDefault)
            ->setBasePrice($basePrice)
            ->setBatchAmount($batchAmount)
            ->setBatchPrice($batchPrice)
            ->setCreated($created)
            ->setCreatedBy($createdBy)
            ->setFeeDefinitionId($feeDefinitionId)
            ->setFeeType($feeType)
            ->setIncludedAmount($includedAmount)
            ->setIsBaseFee($isBaseFee)
            ->setModified($modified)
            ->setModifiedBy($modifiedBy)
            ->setName($name)
            ->setPercentage($percentage);
    }
    /**
     * Get addByDefault value
     * @return bool|null
     */
    public function getAddByDefault(): ?bool
    {
        return $this->addByDefault;
    }
    /**
     * Set addByDefault value
     * @param bool $addByDefault
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDefinitionDTO
     */
    public function setAddByDefault(?bool $addByDefault = null): self
    {
        // validation for constraint: boolean
        if (!is_null($addByDefault) && !is_bool($addByDefault)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($addByDefault, true), gettype($addByDefault)), __LINE__);
        }
        $this->addByDefault = $addByDefault;
        
        return $this;
    }
    /**
     * Get basePrice value
     * @return float|null
     */
    public function getBasePrice(): ?float
    {
        return $this->basePrice;
    }
    /**
     * Set basePrice value
     * @param float $basePrice
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDefinitionDTO
     */
    public function setBasePrice(?float $basePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($basePrice) && !(is_float($basePrice) || is_numeric($basePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($basePrice, true), gettype($basePrice)), __LINE__);
        }
        $this->basePrice = $basePrice;
        
        return $this;
    }
    /**
     * Get batchAmount value
     * @return int|null
     */
    public function getBatchAmount(): ?int
    {
        return $this->batchAmount;
    }
    /**
     * Set batchAmount value
     * @param int $batchAmount
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDefinitionDTO
     */
    public function setBatchAmount(?int $batchAmount = null): self
    {
        // validation for constraint: int
        if (!is_null($batchAmount) && !(is_int($batchAmount) || ctype_digit($batchAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchAmount, true), gettype($batchAmount)), __LINE__);
        }
        $this->batchAmount = $batchAmount;
        
        return $this;
    }
    /**
     * Get batchPrice value
     * @return float|null
     */
    public function getBatchPrice(): ?float
    {
        return $this->batchPrice;
    }
    /**
     * Set batchPrice value
     * @param float $batchPrice
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDefinitionDTO
     */
    public function setBatchPrice(?float $batchPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($batchPrice) && !(is_float($batchPrice) || is_numeric($batchPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($batchPrice, true), gettype($batchPrice)), __LINE__);
        }
        $this->batchPrice = $batchPrice;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDefinitionDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDefinitionDTO
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
     * Get feeDefinitionId value
     * @return int|null
     */
    public function getFeeDefinitionId(): ?int
    {
        return $this->feeDefinitionId;
    }
    /**
     * Set feeDefinitionId value
     * @param int $feeDefinitionId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDefinitionDTO
     */
    public function setFeeDefinitionId(?int $feeDefinitionId = null): self
    {
        // validation for constraint: int
        if (!is_null($feeDefinitionId) && !(is_int($feeDefinitionId) || ctype_digit($feeDefinitionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feeDefinitionId, true), gettype($feeDefinitionId)), __LINE__);
        }
        $this->feeDefinitionId = $feeDefinitionId;
        
        return $this;
    }
    /**
     * Get feeType value
     * @return string|null
     */
    public function getFeeType(): ?string
    {
        return $this->feeType;
    }
    /**
     * Set feeType value
     * @param string $feeType
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDefinitionDTO
     */
    public function setFeeType(?string $feeType = null): self
    {
        // validation for constraint: string
        if (!is_null($feeType) && !is_string($feeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeType, true), gettype($feeType)), __LINE__);
        }
        $this->feeType = $feeType;
        
        return $this;
    }
    /**
     * Get includedAmount value
     * @return int|null
     */
    public function getIncludedAmount(): ?int
    {
        return $this->includedAmount;
    }
    /**
     * Set includedAmount value
     * @param int $includedAmount
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDefinitionDTO
     */
    public function setIncludedAmount(?int $includedAmount = null): self
    {
        // validation for constraint: int
        if (!is_null($includedAmount) && !(is_int($includedAmount) || ctype_digit($includedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($includedAmount, true), gettype($includedAmount)), __LINE__);
        }
        $this->includedAmount = $includedAmount;
        
        return $this;
    }
    /**
     * Get isBaseFee value
     * @return bool|null
     */
    public function getIsBaseFee(): ?bool
    {
        return $this->isBaseFee;
    }
    /**
     * Set isBaseFee value
     * @param bool $isBaseFee
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDefinitionDTO
     */
    public function setIsBaseFee(?bool $isBaseFee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isBaseFee) && !is_bool($isBaseFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBaseFee, true), gettype($isBaseFee)), __LINE__);
        }
        $this->isBaseFee = $isBaseFee;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDefinitionDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDefinitionDTO
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
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDefinitionDTO
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get percentage value
     * @return float|null
     */
    public function getPercentage(): ?float
    {
        return $this->percentage;
    }
    /**
     * Set percentage value
     * @param float $percentage
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDefinitionDTO
     */
    public function setPercentage(?float $percentage = null): self
    {
        // validation for constraint: float
        if (!is_null($percentage) && !(is_float($percentage) || is_numeric($percentage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percentage, true), gettype($percentage)), __LINE__);
        }
        $this->percentage = $percentage;
        
        return $this;
    }
}
