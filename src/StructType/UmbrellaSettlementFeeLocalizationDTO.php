<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementFeeLocalizationDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementFeeLocalizationDTO extends AbstractStructBase
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
     * The locale
     * @var string|null
     */
    protected ?string $locale = null;
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
     * Constructor method for UmbrellaSettlementFeeLocalizationDTO
     * @uses UmbrellaSettlementFeeLocalizationDTO::setCreated()
     * @uses UmbrellaSettlementFeeLocalizationDTO::setCreatedBy()
     * @uses UmbrellaSettlementFeeLocalizationDTO::setDescriptionAdditionalPosition()
     * @uses UmbrellaSettlementFeeLocalizationDTO::setDescriptionBasePosition()
     * @uses UmbrellaSettlementFeeLocalizationDTO::setFeeDefinitionId()
     * @uses UmbrellaSettlementFeeLocalizationDTO::setLocale()
     * @uses UmbrellaSettlementFeeLocalizationDTO::setModified()
     * @uses UmbrellaSettlementFeeLocalizationDTO::setModifiedBy()
     * @uses UmbrellaSettlementFeeLocalizationDTO::setTitleAdditionalPosition()
     * @uses UmbrellaSettlementFeeLocalizationDTO::setTitleBasePosition()
     * @param string $created
     * @param int $createdBy
     * @param string $descriptionAdditionalPosition
     * @param string $descriptionBasePosition
     * @param int $feeDefinitionId
     * @param string $locale
     * @param string $modified
     * @param int $modifiedBy
     * @param string $titleAdditionalPosition
     * @param string $titleBasePosition
     */
    public function __construct(?string $created = null, ?int $createdBy = null, ?string $descriptionAdditionalPosition = null, ?string $descriptionBasePosition = null, ?int $feeDefinitionId = null, ?string $locale = null, ?string $modified = null, ?int $modifiedBy = null, ?string $titleAdditionalPosition = null, ?string $titleBasePosition = null)
    {
        $this
            ->setCreated($created)
            ->setCreatedBy($createdBy)
            ->setDescriptionAdditionalPosition($descriptionAdditionalPosition)
            ->setDescriptionBasePosition($descriptionBasePosition)
            ->setFeeDefinitionId($feeDefinitionId)
            ->setLocale($locale)
            ->setModified($modified)
            ->setModifiedBy($modifiedBy)
            ->setTitleAdditionalPosition($titleAdditionalPosition)
            ->setTitleBasePosition($titleBasePosition);
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeLocalizationDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeLocalizationDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeLocalizationDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeLocalizationDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeLocalizationDTO
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
     * Get locale value
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }
    /**
     * Set locale value
     * @param string $locale
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeLocalizationDTO
     */
    public function setLocale(?string $locale = null): self
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->locale = $locale;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeLocalizationDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeLocalizationDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeLocalizationDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementFeeLocalizationDTO
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
}
