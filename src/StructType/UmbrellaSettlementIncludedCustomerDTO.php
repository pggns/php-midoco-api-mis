<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementIncludedCustomerDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementIncludedCustomerDTO extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The settingId
     * @var int|null
     */
    protected ?int $settingId = null;
    /**
     * Constructor method for UmbrellaSettlementIncludedCustomerDTO
     * @uses UmbrellaSettlementIncludedCustomerDTO::setCustomerId()
     * @uses UmbrellaSettlementIncludedCustomerDTO::setSettingId()
     * @param int $customerId
     * @param int $settingId
     */
    public function __construct(?int $customerId = null, ?int $settingId = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setSettingId($settingId);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementIncludedCustomerDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementIncludedCustomerDTO
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
}
