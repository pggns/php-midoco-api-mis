<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentTokenAttribDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaymentTokenAttribDTO extends AbstractStructBase
{
    /**
     * The attribType
     * @var string|null
     */
    protected ?string $attribType = null;
    /**
     * The attribValue
     * @var string|null
     */
    protected ?string $attribValue = null;
    /**
     * The id
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * Constructor method for PaymentTokenAttribDTO
     * @uses PaymentTokenAttribDTO::setAttribType()
     * @uses PaymentTokenAttribDTO::setAttribValue()
     * @uses PaymentTokenAttribDTO::setId()
     * @param string $attribType
     * @param string $attribValue
     * @param string $id
     */
    public function __construct(?string $attribType = null, ?string $attribValue = null, ?string $id = null)
    {
        $this
            ->setAttribType($attribType)
            ->setAttribValue($attribValue)
            ->setId($id);
    }
    /**
     * Get attribType value
     * @return string|null
     */
    public function getAttribType(): ?string
    {
        return $this->attribType;
    }
    /**
     * Set attribType value
     * @param string $attribType
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenAttribDTO
     */
    public function setAttribType(?string $attribType = null): self
    {
        // validation for constraint: string
        if (!is_null($attribType) && !is_string($attribType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attribType, true), gettype($attribType)), __LINE__);
        }
        $this->attribType = $attribType;
        
        return $this;
    }
    /**
     * Get attribValue value
     * @return string|null
     */
    public function getAttribValue(): ?string
    {
        return $this->attribValue;
    }
    /**
     * Set attribValue value
     * @param string $attribValue
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenAttribDTO
     */
    public function setAttribValue(?string $attribValue = null): self
    {
        // validation for constraint: string
        if (!is_null($attribValue) && !is_string($attribValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attribValue, true), gettype($attribValue)), __LINE__);
        }
        $this->attribValue = $attribValue;
        
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenAttribDTO
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
}
