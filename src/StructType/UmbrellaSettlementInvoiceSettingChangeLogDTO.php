<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementInvoiceSettingChangeLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementInvoiceSettingChangeLogDTO extends AbstractStructBase
{
    /**
     * The attribute
     * @var string|null
     */
    protected ?string $attribute = null;
    /**
     * The changeId
     * @var int|null
     */
    protected ?int $changeId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The newValue
     * @var string|null
     */
    protected ?string $newValue = null;
    /**
     * The oldValue
     * @var string|null
     */
    protected ?string $oldValue = null;
    /**
     * The source
     * @var string|null
     */
    protected ?string $source = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for UmbrellaSettlementInvoiceSettingChangeLogDTO
     * @uses UmbrellaSettlementInvoiceSettingChangeLogDTO::setAttribute()
     * @uses UmbrellaSettlementInvoiceSettingChangeLogDTO::setChangeId()
     * @uses UmbrellaSettlementInvoiceSettingChangeLogDTO::setCustomerId()
     * @uses UmbrellaSettlementInvoiceSettingChangeLogDTO::setNewValue()
     * @uses UmbrellaSettlementInvoiceSettingChangeLogDTO::setOldValue()
     * @uses UmbrellaSettlementInvoiceSettingChangeLogDTO::setSource()
     * @uses UmbrellaSettlementInvoiceSettingChangeLogDTO::setTimestamp()
     * @uses UmbrellaSettlementInvoiceSettingChangeLogDTO::setUserId()
     * @param string $attribute
     * @param int $changeId
     * @param int $customerId
     * @param string $newValue
     * @param string $oldValue
     * @param string $source
     * @param string $timestamp
     * @param int $userId
     */
    public function __construct(?string $attribute = null, ?int $changeId = null, ?int $customerId = null, ?string $newValue = null, ?string $oldValue = null, ?string $source = null, ?string $timestamp = null, ?int $userId = null)
    {
        $this
            ->setAttribute($attribute)
            ->setChangeId($changeId)
            ->setCustomerId($customerId)
            ->setNewValue($newValue)
            ->setOldValue($oldValue)
            ->setSource($source)
            ->setTimestamp($timestamp)
            ->setUserId($userId);
    }
    /**
     * Get attribute value
     * @return string|null
     */
    public function getAttribute(): ?string
    {
        return $this->attribute;
    }
    /**
     * Set attribute value
     * @param string $attribute
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementInvoiceSettingChangeLogDTO
     */
    public function setAttribute(?string $attribute = null): self
    {
        // validation for constraint: string
        if (!is_null($attribute) && !is_string($attribute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attribute, true), gettype($attribute)), __LINE__);
        }
        $this->attribute = $attribute;
        
        return $this;
    }
    /**
     * Get changeId value
     * @return int|null
     */
    public function getChangeId(): ?int
    {
        return $this->changeId;
    }
    /**
     * Set changeId value
     * @param int $changeId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementInvoiceSettingChangeLogDTO
     */
    public function setChangeId(?int $changeId = null): self
    {
        // validation for constraint: int
        if (!is_null($changeId) && !(is_int($changeId) || ctype_digit($changeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($changeId, true), gettype($changeId)), __LINE__);
        }
        $this->changeId = $changeId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementInvoiceSettingChangeLogDTO
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
     * Get newValue value
     * @return string|null
     */
    public function getNewValue(): ?string
    {
        return $this->newValue;
    }
    /**
     * Set newValue value
     * @param string $newValue
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementInvoiceSettingChangeLogDTO
     */
    public function setNewValue(?string $newValue = null): self
    {
        // validation for constraint: string
        if (!is_null($newValue) && !is_string($newValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newValue, true), gettype($newValue)), __LINE__);
        }
        $this->newValue = $newValue;
        
        return $this;
    }
    /**
     * Get oldValue value
     * @return string|null
     */
    public function getOldValue(): ?string
    {
        return $this->oldValue;
    }
    /**
     * Set oldValue value
     * @param string $oldValue
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementInvoiceSettingChangeLogDTO
     */
    public function setOldValue(?string $oldValue = null): self
    {
        // validation for constraint: string
        if (!is_null($oldValue) && !is_string($oldValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldValue, true), gettype($oldValue)), __LINE__);
        }
        $this->oldValue = $oldValue;
        
        return $this;
    }
    /**
     * Get source value
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }
    /**
     * Set source value
     * @param string $source
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementInvoiceSettingChangeLogDTO
     */
    public function setSource(?string $source = null): self
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($source, true), gettype($source)), __LINE__);
        }
        $this->source = $source;
        
        return $this;
    }
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementInvoiceSettingChangeLogDTO
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        
        return $this;
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementInvoiceSettingChangeLogDTO
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
}
