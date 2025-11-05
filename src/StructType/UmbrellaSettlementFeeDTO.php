<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementFeeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementFeeDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var int|null
     */
    protected ?int $accountId = null;
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
     * The descriptionAdditionalPosition
     * @var string|null
     */
    protected ?string $descriptionAdditionalPosition = null;
    /**
     * The descriptionBasePosition
     * @var string|null
     */
    protected ?string $descriptionBasePosition = null;
    /**
     * The feeDefinitionId
     * @var int|null
     */
    protected ?int $feeDefinitionId = null;
    /**
     * The feeId
     * @var int|null
     */
    protected ?int $feeId = null;
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
     * The manualAmount
     * @var float|null
     */
    protected ?float $manualAmount = null;
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
     * The percentage
     * @var float|null
     */
    protected ?float $percentage = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The settingId
     * @var int|null
     */
    protected ?int $settingId = null;
    /**
     * The taxId
     * @var int|null
     */
    protected ?int $taxId = null;
    /**
     * The titleAdditionalPosition
     * @var string|null
     */
    protected ?string $titleAdditionalPosition = null;
    /**
     * The titleBasePosition
     * @var string|null
     */
    protected ?string $titleBasePosition = null;
    /**
     * The unitId
     * @var int|null
     */
    protected ?int $unitId = null;
    /**
     * Constructor method for UmbrellaSettlementFeeDTO
     * @uses UmbrellaSettlementFeeDTO::setAccountId()
     * @uses UmbrellaSettlementFeeDTO::setBasePrice()
     * @uses UmbrellaSettlementFeeDTO::setBatchAmount()
     * @uses UmbrellaSettlementFeeDTO::setBatchPrice()
     * @uses UmbrellaSettlementFeeDTO::setCreated()
     * @uses UmbrellaSettlementFeeDTO::setCreatedBy()
     * @uses UmbrellaSettlementFeeDTO::setDescriptionAdditionalPosition()
     * @uses UmbrellaSettlementFeeDTO::setDescriptionBasePosition()
     * @uses UmbrellaSettlementFeeDTO::setFeeDefinitionId()
     * @uses UmbrellaSettlementFeeDTO::setFeeId()
     * @uses UmbrellaSettlementFeeDTO::setFeeType()
     * @uses UmbrellaSettlementFeeDTO::setIncludedAmount()
     * @uses UmbrellaSettlementFeeDTO::setManualAmount()
     * @uses UmbrellaSettlementFeeDTO::setModified()
     * @uses UmbrellaSettlementFeeDTO::setModifiedBy()
     * @uses UmbrellaSettlementFeeDTO::setPercentage()
     * @uses UmbrellaSettlementFeeDTO::setPosition()
     * @uses UmbrellaSettlementFeeDTO::setSettingId()
     * @uses UmbrellaSettlementFeeDTO::setTaxId()
     * @uses UmbrellaSettlementFeeDTO::setTitleAdditionalPosition()
     * @uses UmbrellaSettlementFeeDTO::setTitleBasePosition()
     * @uses UmbrellaSettlementFeeDTO::setUnitId()
     * @param int $accountId
     * @param float $basePrice
     * @param int $batchAmount
     * @param float $batchPrice
     * @param string $created
     * @param int $createdBy
     * @param string $descriptionAdditionalPosition
     * @param string $descriptionBasePosition
     * @param int $feeDefinitionId
     * @param int $feeId
     * @param string $feeType
     * @param int $includedAmount
     * @param float $manualAmount
     * @param string $modified
     * @param int $modifiedBy
     * @param float $percentage
     * @param int $position
     * @param int $settingId
     * @param int $taxId
     * @param string $titleAdditionalPosition
     * @param string $titleBasePosition
     * @param int $unitId
     */
    public function __construct(?int $accountId = null, ?float $basePrice = null, ?int $batchAmount = null, ?float $batchPrice = null, ?string $created = null, ?int $createdBy = null, ?string $descriptionAdditionalPosition = null, ?string $descriptionBasePosition = null, ?int $feeDefinitionId = null, ?int $feeId = null, ?string $feeType = null, ?int $includedAmount = null, ?float $manualAmount = null, ?string $modified = null, ?int $modifiedBy = null, ?float $percentage = null, ?int $position = null, ?int $settingId = null, ?int $taxId = null, ?string $titleAdditionalPosition = null, ?string $titleBasePosition = null, ?int $unitId = null)
    {
        $this
            ->setAccountId($accountId)
            ->setBasePrice($basePrice)
            ->setBatchAmount($batchAmount)
            ->setBatchPrice($batchPrice)
            ->setCreated($created)
            ->setCreatedBy($createdBy)
            ->setDescriptionAdditionalPosition($descriptionAdditionalPosition)
            ->setDescriptionBasePosition($descriptionBasePosition)
            ->setFeeDefinitionId($feeDefinitionId)
            ->setFeeId($feeId)
            ->setFeeType($feeType)
            ->setIncludedAmount($includedAmount)
            ->setManualAmount($manualAmount)
            ->setModified($modified)
            ->setModifiedBy($modifiedBy)
            ->setPercentage($percentage)
            ->setPosition($position)
            ->setSettingId($settingId)
            ->setTaxId($taxId)
            ->setTitleAdditionalPosition($titleAdditionalPosition)
            ->setTitleBasePosition($titleBasePosition)
            ->setUnitId($unitId);
    }
    /**
     * Get accountId value
     * @return int|null
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param int $accountId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDTO
     */
    public function setAccountId(?int $accountId = null): self
    {
        // validation for constraint: int
        if (!is_null($accountId) && !(is_int($accountId) || ctype_digit($accountId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDTO
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
     * Get descriptionAdditionalPosition value
     * @return string|null
     */
    public function getDescriptionAdditionalPosition(): ?string
    {
        return $this->descriptionAdditionalPosition;
    }
    /**
     * Set descriptionAdditionalPosition value
     * @param string $descriptionAdditionalPosition
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDTO
     */
    public function setDescriptionAdditionalPosition(?string $descriptionAdditionalPosition = null): self
    {
        // validation for constraint: string
        if (!is_null($descriptionAdditionalPosition) && !is_string($descriptionAdditionalPosition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descriptionAdditionalPosition, true), gettype($descriptionAdditionalPosition)), __LINE__);
        }
        $this->descriptionAdditionalPosition = $descriptionAdditionalPosition;
        
        return $this;
    }
    /**
     * Get descriptionBasePosition value
     * @return string|null
     */
    public function getDescriptionBasePosition(): ?string
    {
        return $this->descriptionBasePosition;
    }
    /**
     * Set descriptionBasePosition value
     * @param string $descriptionBasePosition
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDTO
     */
    public function setDescriptionBasePosition(?string $descriptionBasePosition = null): self
    {
        // validation for constraint: string
        if (!is_null($descriptionBasePosition) && !is_string($descriptionBasePosition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descriptionBasePosition, true), gettype($descriptionBasePosition)), __LINE__);
        }
        $this->descriptionBasePosition = $descriptionBasePosition;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDTO
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
     * Get manualAmount value
     * @return float|null
     */
    public function getManualAmount(): ?float
    {
        return $this->manualAmount;
    }
    /**
     * Set manualAmount value
     * @param float $manualAmount
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDTO
     */
    public function setManualAmount(?float $manualAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($manualAmount) && !(is_float($manualAmount) || is_numeric($manualAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($manualAmount, true), gettype($manualAmount)), __LINE__);
        }
        $this->manualAmount = $manualAmount;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDTO
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
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get settingId value
     * @return int|null
     */
    public function getSettingId(): ?int
    {
        return $this->settingId;
    }
    /**
     * Set settingId value
     * @param int $settingId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDTO
     */
    public function setSettingId(?int $settingId = null): self
    {
        // validation for constraint: int
        if (!is_null($settingId) && !(is_int($settingId) || ctype_digit($settingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settingId, true), gettype($settingId)), __LINE__);
        }
        $this->settingId = $settingId;
        
        return $this;
    }
    /**
     * Get taxId value
     * @return int|null
     */
    public function getTaxId(): ?int
    {
        return $this->taxId;
    }
    /**
     * Set taxId value
     * @param int $taxId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDTO
     */
    public function setTaxId(?int $taxId = null): self
    {
        // validation for constraint: int
        if (!is_null($taxId) && !(is_int($taxId) || ctype_digit($taxId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($taxId, true), gettype($taxId)), __LINE__);
        }
        $this->taxId = $taxId;
        
        return $this;
    }
    /**
     * Get titleAdditionalPosition value
     * @return string|null
     */
    public function getTitleAdditionalPosition(): ?string
    {
        return $this->titleAdditionalPosition;
    }
    /**
     * Set titleAdditionalPosition value
     * @param string $titleAdditionalPosition
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDTO
     */
    public function setTitleAdditionalPosition(?string $titleAdditionalPosition = null): self
    {
        // validation for constraint: string
        if (!is_null($titleAdditionalPosition) && !is_string($titleAdditionalPosition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($titleAdditionalPosition, true), gettype($titleAdditionalPosition)), __LINE__);
        }
        $this->titleAdditionalPosition = $titleAdditionalPosition;
        
        return $this;
    }
    /**
     * Get titleBasePosition value
     * @return string|null
     */
    public function getTitleBasePosition(): ?string
    {
        return $this->titleBasePosition;
    }
    /**
     * Set titleBasePosition value
     * @param string $titleBasePosition
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDTO
     */
    public function setTitleBasePosition(?string $titleBasePosition = null): self
    {
        // validation for constraint: string
        if (!is_null($titleBasePosition) && !is_string($titleBasePosition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($titleBasePosition, true), gettype($titleBasePosition)), __LINE__);
        }
        $this->titleBasePosition = $titleBasePosition;
        
        return $this;
    }
    /**
     * Get unitId value
     * @return int|null
     */
    public function getUnitId(): ?int
    {
        return $this->unitId;
    }
    /**
     * Set unitId value
     * @param int $unitId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeDTO
     */
    public function setUnitId(?int $unitId = null): self
    {
        // validation for constraint: int
        if (!is_null($unitId) && !(is_int($unitId) || ctype_digit($unitId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($unitId, true), gettype($unitId)), __LINE__);
        }
        $this->unitId = $unitId;
        
        return $this;
    }
}
