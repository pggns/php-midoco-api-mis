<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttributeDefinitionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AttributeDefinitionDTO extends AbstractStructBase
{
    /**
     * The attributeName
     * @var string|null
     */
    protected ?string $attributeName = null;
    /**
     * The contextId
     * @var string|null
     */
    protected ?string $contextId = null;
    /**
     * The defaultValue
     * @var string|null
     */
    protected ?string $defaultValue = null;
    /**
     * The exportToReporting
     * @var bool|null
     */
    protected ?bool $exportToReporting = null;
    /**
     * The isInheritable
     * @var bool|null
     */
    protected ?bool $isInheritable = null;
    /**
     * The isMandatory
     * @var bool|null
     */
    protected ?bool $isMandatory = null;
    /**
     * The isMarketingcode
     * @var bool|null
     */
    protected ?bool $isMarketingcode = null;
    /**
     * The isVisible
     * @var bool|null
     */
    protected ?bool $isVisible = null;
    /**
     * The length
     * @var int|null
     */
    protected ?int $length = null;
    /**
     * The prec
     * @var int|null
     */
    protected ?int $prec = null;
    /**
     * The requiresUpdateRight
     * @var bool|null
     */
    protected ?bool $requiresUpdateRight = null;
    /**
     * The type
     * @var int|null
     */
    protected ?int $type = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for AttributeDefinitionDTO
     * @uses AttributeDefinitionDTO::setAttributeName()
     * @uses AttributeDefinitionDTO::setContextId()
     * @uses AttributeDefinitionDTO::setDefaultValue()
     * @uses AttributeDefinitionDTO::setExportToReporting()
     * @uses AttributeDefinitionDTO::setIsInheritable()
     * @uses AttributeDefinitionDTO::setIsMandatory()
     * @uses AttributeDefinitionDTO::setIsMarketingcode()
     * @uses AttributeDefinitionDTO::setIsVisible()
     * @uses AttributeDefinitionDTO::setLength()
     * @uses AttributeDefinitionDTO::setPrec()
     * @uses AttributeDefinitionDTO::setRequiresUpdateRight()
     * @uses AttributeDefinitionDTO::setType()
     * @uses AttributeDefinitionDTO::setUnitName()
     * @param string $attributeName
     * @param string $contextId
     * @param string $defaultValue
     * @param bool $exportToReporting
     * @param bool $isInheritable
     * @param bool $isMandatory
     * @param bool $isMarketingcode
     * @param bool $isVisible
     * @param int $length
     * @param int $prec
     * @param bool $requiresUpdateRight
     * @param int $type
     * @param string $unitName
     */
    public function __construct(?string $attributeName = null, ?string $contextId = null, ?string $defaultValue = null, ?bool $exportToReporting = null, ?bool $isInheritable = null, ?bool $isMandatory = null, ?bool $isMarketingcode = null, ?bool $isVisible = null, ?int $length = null, ?int $prec = null, ?bool $requiresUpdateRight = null, ?int $type = null, ?string $unitName = null)
    {
        $this
            ->setAttributeName($attributeName)
            ->setContextId($contextId)
            ->setDefaultValue($defaultValue)
            ->setExportToReporting($exportToReporting)
            ->setIsInheritable($isInheritable)
            ->setIsMandatory($isMandatory)
            ->setIsMarketingcode($isMarketingcode)
            ->setIsVisible($isVisible)
            ->setLength($length)
            ->setPrec($prec)
            ->setRequiresUpdateRight($requiresUpdateRight)
            ->setType($type)
            ->setUnitName($unitName);
    }
    /**
     * Get attributeName value
     * @return string|null
     */
    public function getAttributeName(): ?string
    {
        return $this->attributeName;
    }
    /**
     * Set attributeName value
     * @param string $attributeName
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDefinitionDTO
     */
    public function setAttributeName(?string $attributeName = null): self
    {
        // validation for constraint: string
        if (!is_null($attributeName) && !is_string($attributeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeName, true), gettype($attributeName)), __LINE__);
        }
        $this->attributeName = $attributeName;
        
        return $this;
    }
    /**
     * Get contextId value
     * @return string|null
     */
    public function getContextId(): ?string
    {
        return $this->contextId;
    }
    /**
     * Set contextId value
     * @param string $contextId
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDefinitionDTO
     */
    public function setContextId(?string $contextId = null): self
    {
        // validation for constraint: string
        if (!is_null($contextId) && !is_string($contextId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contextId, true), gettype($contextId)), __LINE__);
        }
        $this->contextId = $contextId;
        
        return $this;
    }
    /**
     * Get defaultValue value
     * @return string|null
     */
    public function getDefaultValue(): ?string
    {
        return $this->defaultValue;
    }
    /**
     * Set defaultValue value
     * @param string $defaultValue
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDefinitionDTO
     */
    public function setDefaultValue(?string $defaultValue = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultValue) && !is_string($defaultValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultValue, true), gettype($defaultValue)), __LINE__);
        }
        $this->defaultValue = $defaultValue;
        
        return $this;
    }
    /**
     * Get exportToReporting value
     * @return bool|null
     */
    public function getExportToReporting(): ?bool
    {
        return $this->exportToReporting;
    }
    /**
     * Set exportToReporting value
     * @param bool $exportToReporting
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDefinitionDTO
     */
    public function setExportToReporting(?bool $exportToReporting = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exportToReporting) && !is_bool($exportToReporting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exportToReporting, true), gettype($exportToReporting)), __LINE__);
        }
        $this->exportToReporting = $exportToReporting;
        
        return $this;
    }
    /**
     * Get isInheritable value
     * @return bool|null
     */
    public function getIsInheritable(): ?bool
    {
        return $this->isInheritable;
    }
    /**
     * Set isInheritable value
     * @param bool $isInheritable
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDefinitionDTO
     */
    public function setIsInheritable(?bool $isInheritable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInheritable) && !is_bool($isInheritable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInheritable, true), gettype($isInheritable)), __LINE__);
        }
        $this->isInheritable = $isInheritable;
        
        return $this;
    }
    /**
     * Get isMandatory value
     * @return bool|null
     */
    public function getIsMandatory(): ?bool
    {
        return $this->isMandatory;
    }
    /**
     * Set isMandatory value
     * @param bool $isMandatory
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDefinitionDTO
     */
    public function setIsMandatory(?bool $isMandatory = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMandatory) && !is_bool($isMandatory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMandatory, true), gettype($isMandatory)), __LINE__);
        }
        $this->isMandatory = $isMandatory;
        
        return $this;
    }
    /**
     * Get isMarketingcode value
     * @return bool|null
     */
    public function getIsMarketingcode(): ?bool
    {
        return $this->isMarketingcode;
    }
    /**
     * Set isMarketingcode value
     * @param bool $isMarketingcode
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDefinitionDTO
     */
    public function setIsMarketingcode(?bool $isMarketingcode = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMarketingcode) && !is_bool($isMarketingcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMarketingcode, true), gettype($isMarketingcode)), __LINE__);
        }
        $this->isMarketingcode = $isMarketingcode;
        
        return $this;
    }
    /**
     * Get isVisible value
     * @return bool|null
     */
    public function getIsVisible(): ?bool
    {
        return $this->isVisible;
    }
    /**
     * Set isVisible value
     * @param bool $isVisible
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDefinitionDTO
     */
    public function setIsVisible(?bool $isVisible = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVisible) && !is_bool($isVisible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVisible, true), gettype($isVisible)), __LINE__);
        }
        $this->isVisible = $isVisible;
        
        return $this;
    }
    /**
     * Get length value
     * @return int|null
     */
    public function getLength(): ?int
    {
        return $this->length;
    }
    /**
     * Set length value
     * @param int $length
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDefinitionDTO
     */
    public function setLength(?int $length = null): self
    {
        // validation for constraint: int
        if (!is_null($length) && !(is_int($length) || ctype_digit($length))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($length, true), gettype($length)), __LINE__);
        }
        $this->length = $length;
        
        return $this;
    }
    /**
     * Get prec value
     * @return int|null
     */
    public function getPrec(): ?int
    {
        return $this->prec;
    }
    /**
     * Set prec value
     * @param int $prec
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDefinitionDTO
     */
    public function setPrec(?int $prec = null): self
    {
        // validation for constraint: int
        if (!is_null($prec) && !(is_int($prec) || ctype_digit($prec))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($prec, true), gettype($prec)), __LINE__);
        }
        $this->prec = $prec;
        
        return $this;
    }
    /**
     * Get requiresUpdateRight value
     * @return bool|null
     */
    public function getRequiresUpdateRight(): ?bool
    {
        return $this->requiresUpdateRight;
    }
    /**
     * Set requiresUpdateRight value
     * @param bool $requiresUpdateRight
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDefinitionDTO
     */
    public function setRequiresUpdateRight(?bool $requiresUpdateRight = null): self
    {
        // validation for constraint: boolean
        if (!is_null($requiresUpdateRight) && !is_bool($requiresUpdateRight)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($requiresUpdateRight, true), gettype($requiresUpdateRight)), __LINE__);
        }
        $this->requiresUpdateRight = $requiresUpdateRight;
        
        return $this;
    }
    /**
     * Get type value
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDefinitionDTO
     */
    public function setType(?int $type = null): self
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDefinitionDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
