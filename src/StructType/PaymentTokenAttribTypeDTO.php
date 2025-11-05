<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentTokenAttribTypeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaymentTokenAttribTypeDTO extends AbstractStructBase
{
    /**
     * The attribDatatype
     * @var string|null
     */
    protected ?string $attribDatatype = null;
    /**
     * The attribTypeId
     * @var string|null
     */
    protected ?string $attribTypeId = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * Constructor method for PaymentTokenAttribTypeDTO
     * @uses PaymentTokenAttribTypeDTO::setAttribDatatype()
     * @uses PaymentTokenAttribTypeDTO::setAttribTypeId()
     * @uses PaymentTokenAttribTypeDTO::setPosition()
     * @param string $attribDatatype
     * @param string $attribTypeId
     * @param int $position
     */
    public function __construct(?string $attribDatatype = null, ?string $attribTypeId = null, ?int $position = null)
    {
        $this
            ->setAttribDatatype($attribDatatype)
            ->setAttribTypeId($attribTypeId)
            ->setPosition($position);
    }
    /**
     * Get attribDatatype value
     * @return string|null
     */
    public function getAttribDatatype(): ?string
    {
        return $this->attribDatatype;
    }
    /**
     * Set attribDatatype value
     * @param string $attribDatatype
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenAttribTypeDTO
     */
    public function setAttribDatatype(?string $attribDatatype = null): self
    {
        // validation for constraint: string
        if (!is_null($attribDatatype) && !is_string($attribDatatype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attribDatatype, true), gettype($attribDatatype)), __LINE__);
        }
        $this->attribDatatype = $attribDatatype;
        
        return $this;
    }
    /**
     * Get attribTypeId value
     * @return string|null
     */
    public function getAttribTypeId(): ?string
    {
        return $this->attribTypeId;
    }
    /**
     * Set attribTypeId value
     * @param string $attribTypeId
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenAttribTypeDTO
     */
    public function setAttribTypeId(?string $attribTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($attribTypeId) && !is_string($attribTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attribTypeId, true), gettype($attribTypeId)), __LINE__);
        }
        $this->attribTypeId = $attribTypeId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenAttribTypeDTO
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
}
