<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTableChooserValue StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoTableChooserValue extends AbstractStructBase
{
    /**
     * The isSelected
     * @var bool|null
     */
    protected ?bool $isSelected = null;
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * The key
     * @var string|null
     */
    protected ?string $key = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for MidocoTableChooserValue
     * @uses MidocoTableChooserValue::setIsSelected()
     * @uses MidocoTableChooserValue::setValue()
     * @uses MidocoTableChooserValue::setKey()
     * @uses MidocoTableChooserValue::setDescription()
     * @param bool $isSelected
     * @param string $value
     * @param string $key
     * @param string $description
     */
    public function __construct(?bool $isSelected = null, ?string $value = null, ?string $key = null, ?string $description = null)
    {
        $this
            ->setIsSelected($isSelected)
            ->setValue($value)
            ->setKey($key)
            ->setDescription($description);
    }
    /**
     * Get isSelected value
     * @return bool|null
     */
    public function getIsSelected(): ?bool
    {
        return $this->isSelected;
    }
    /**
     * Set isSelected value
     * @param bool $isSelected
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoTableChooserValue
     */
    public function setIsSelected(?bool $isSelected = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSelected) && !is_bool($isSelected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSelected, true), gettype($isSelected)), __LINE__);
        }
        $this->isSelected = $isSelected;
        
        return $this;
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoTableChooserValue
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
    /**
     * Get key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param string $key
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoTableChooserValue
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->key = $key;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoTableChooserValue
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
}
