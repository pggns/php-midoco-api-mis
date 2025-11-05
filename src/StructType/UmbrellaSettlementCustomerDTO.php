<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementCustomerDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementCustomerDTO extends AbstractStructBase
{
    /**
     * The added
     * @var string|null
     */
    protected ?string $added = null;
    /**
     * The addedBy
     * @var int|null
     */
    protected ?int $addedBy = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The removed
     * @var string|null
     */
    protected ?string $removed = null;
    /**
     * The removedBy
     * @var int|null
     */
    protected ?int $removedBy = null;
    /**
     * The settlementMonthId
     * @var int|null
     */
    protected ?int $settlementMonthId = null;
    /**
     * The sortKey
     * @var string|null
     */
    protected ?string $sortKey = null;
    /**
     * Constructor method for UmbrellaSettlementCustomerDTO
     * @uses UmbrellaSettlementCustomerDTO::setAdded()
     * @uses UmbrellaSettlementCustomerDTO::setAddedBy()
     * @uses UmbrellaSettlementCustomerDTO::setCustomerId()
     * @uses UmbrellaSettlementCustomerDTO::setRemoved()
     * @uses UmbrellaSettlementCustomerDTO::setRemovedBy()
     * @uses UmbrellaSettlementCustomerDTO::setSettlementMonthId()
     * @uses UmbrellaSettlementCustomerDTO::setSortKey()
     * @param string $added
     * @param int $addedBy
     * @param int $customerId
     * @param string $removed
     * @param int $removedBy
     * @param int $settlementMonthId
     * @param string $sortKey
     */
    public function __construct(?string $added = null, ?int $addedBy = null, ?int $customerId = null, ?string $removed = null, ?int $removedBy = null, ?int $settlementMonthId = null, ?string $sortKey = null)
    {
        $this
            ->setAdded($added)
            ->setAddedBy($addedBy)
            ->setCustomerId($customerId)
            ->setRemoved($removed)
            ->setRemovedBy($removedBy)
            ->setSettlementMonthId($settlementMonthId)
            ->setSortKey($sortKey);
    }
    /**
     * Get added value
     * @return string|null
     */
    public function getAdded(): ?string
    {
        return $this->added;
    }
    /**
     * Set added value
     * @param string $added
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementCustomerDTO
     */
    public function setAdded(?string $added = null): self
    {
        // validation for constraint: string
        if (!is_null($added) && !is_string($added)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($added, true), gettype($added)), __LINE__);
        }
        $this->added = $added;
        
        return $this;
    }
    /**
     * Get addedBy value
     * @return int|null
     */
    public function getAddedBy(): ?int
    {
        return $this->addedBy;
    }
    /**
     * Set addedBy value
     * @param int $addedBy
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementCustomerDTO
     */
    public function setAddedBy(?int $addedBy = null): self
    {
        // validation for constraint: int
        if (!is_null($addedBy) && !(is_int($addedBy) || ctype_digit($addedBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addedBy, true), gettype($addedBy)), __LINE__);
        }
        $this->addedBy = $addedBy;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementCustomerDTO
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
     * Get removed value
     * @return string|null
     */
    public function getRemoved(): ?string
    {
        return $this->removed;
    }
    /**
     * Set removed value
     * @param string $removed
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementCustomerDTO
     */
    public function setRemoved(?string $removed = null): self
    {
        // validation for constraint: string
        if (!is_null($removed) && !is_string($removed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($removed, true), gettype($removed)), __LINE__);
        }
        $this->removed = $removed;
        
        return $this;
    }
    /**
     * Get removedBy value
     * @return int|null
     */
    public function getRemovedBy(): ?int
    {
        return $this->removedBy;
    }
    /**
     * Set removedBy value
     * @param int $removedBy
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementCustomerDTO
     */
    public function setRemovedBy(?int $removedBy = null): self
    {
        // validation for constraint: int
        if (!is_null($removedBy) && !(is_int($removedBy) || ctype_digit($removedBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($removedBy, true), gettype($removedBy)), __LINE__);
        }
        $this->removedBy = $removedBy;
        
        return $this;
    }
    /**
     * Get settlementMonthId value
     * @return int|null
     */
    public function getSettlementMonthId(): ?int
    {
        return $this->settlementMonthId;
    }
    /**
     * Set settlementMonthId value
     * @param int $settlementMonthId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementCustomerDTO
     */
    public function setSettlementMonthId(?int $settlementMonthId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementMonthId) && !(is_int($settlementMonthId) || ctype_digit($settlementMonthId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementMonthId, true), gettype($settlementMonthId)), __LINE__);
        }
        $this->settlementMonthId = $settlementMonthId;
        
        return $this;
    }
    /**
     * Get sortKey value
     * @return string|null
     */
    public function getSortKey(): ?string
    {
        return $this->sortKey;
    }
    /**
     * Set sortKey value
     * @param string $sortKey
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementCustomerDTO
     */
    public function setSortKey(?string $sortKey = null): self
    {
        // validation for constraint: string
        if (!is_null($sortKey) && !is_string($sortKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortKey, true), gettype($sortKey)), __LINE__);
        }
        $this->sortKey = $sortKey;
        
        return $this;
    }
}
