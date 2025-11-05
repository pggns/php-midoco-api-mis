<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BexioPaymentTypeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BexioPaymentTypeDTO extends AbstractStructBase
{
    /**
     * The isVisibleInMidoco
     * @var bool|null
     */
    protected ?bool $isVisibleInMidoco = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The paymentTypeId
     * @var int|null
     */
    protected ?int $paymentTypeId = null;
    /**
     * Constructor method for BexioPaymentTypeDTO
     * @uses BexioPaymentTypeDTO::setIsVisibleInMidoco()
     * @uses BexioPaymentTypeDTO::setName()
     * @uses BexioPaymentTypeDTO::setPaymentTypeId()
     * @param bool $isVisibleInMidoco
     * @param string $name
     * @param int $paymentTypeId
     */
    public function __construct(?bool $isVisibleInMidoco = null, ?string $name = null, ?int $paymentTypeId = null)
    {
        $this
            ->setIsVisibleInMidoco($isVisibleInMidoco)
            ->setName($name)
            ->setPaymentTypeId($paymentTypeId);
    }
    /**
     * Get isVisibleInMidoco value
     * @return bool|null
     */
    public function getIsVisibleInMidoco(): ?bool
    {
        return $this->isVisibleInMidoco;
    }
    /**
     * Set isVisibleInMidoco value
     * @param bool $isVisibleInMidoco
     * @return \Pggns\MidocoApi\Mis\StructType\BexioPaymentTypeDTO
     */
    public function setIsVisibleInMidoco(?bool $isVisibleInMidoco = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVisibleInMidoco) && !is_bool($isVisibleInMidoco)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVisibleInMidoco, true), gettype($isVisibleInMidoco)), __LINE__);
        }
        $this->isVisibleInMidoco = $isVisibleInMidoco;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\BexioPaymentTypeDTO
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
     * Get paymentTypeId value
     * @return int|null
     */
    public function getPaymentTypeId(): ?int
    {
        return $this->paymentTypeId;
    }
    /**
     * Set paymentTypeId value
     * @param int $paymentTypeId
     * @return \Pggns\MidocoApi\Mis\StructType\BexioPaymentTypeDTO
     */
    public function setPaymentTypeId(?int $paymentTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($paymentTypeId) && !(is_int($paymentTypeId) || ctype_digit($paymentTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentTypeId, true), gettype($paymentTypeId)), __LINE__);
        }
        $this->paymentTypeId = $paymentTypeId;
        
        return $this;
    }
}
