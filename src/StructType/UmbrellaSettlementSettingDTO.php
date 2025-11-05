<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementSettingDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementSettingDTO extends AbstractStructBase
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
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The importFormat
     * @var string|null
     */
    protected ?string $importFormat = null;
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
     * The settingId
     * @var int|null
     */
    protected ?int $settingId = null;
    /**
     * The sortKey
     * @var string|null
     */
    protected ?string $sortKey = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * Constructor method for UmbrellaSettlementSettingDTO
     * @uses UmbrellaSettlementSettingDTO::setCreated()
     * @uses UmbrellaSettlementSettingDTO::setCreatedBy()
     * @uses UmbrellaSettlementSettingDTO::setCustomerId()
     * @uses UmbrellaSettlementSettingDTO::setImportFormat()
     * @uses UmbrellaSettlementSettingDTO::setModified()
     * @uses UmbrellaSettlementSettingDTO::setModifiedBy()
     * @uses UmbrellaSettlementSettingDTO::setSettingId()
     * @uses UmbrellaSettlementSettingDTO::setSortKey()
     * @uses UmbrellaSettlementSettingDTO::setValidFrom()
     * @uses UmbrellaSettlementSettingDTO::setValidTo()
     * @param string $created
     * @param int $createdBy
     * @param int $customerId
     * @param string $importFormat
     * @param string $modified
     * @param int $modifiedBy
     * @param int $settingId
     * @param string $sortKey
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(?string $created = null, ?int $createdBy = null, ?int $customerId = null, ?string $importFormat = null, ?string $modified = null, ?int $modifiedBy = null, ?int $settingId = null, ?string $sortKey = null, ?string $validFrom = null, ?string $validTo = null)
    {
        $this
            ->setCreated($created)
            ->setCreatedBy($createdBy)
            ->setCustomerId($customerId)
            ->setImportFormat($importFormat)
            ->setModified($modified)
            ->setModifiedBy($modifiedBy)
            ->setSettingId($settingId)
            ->setSortKey($sortKey)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementSettingDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementSettingDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementSettingDTO
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
     * Get importFormat value
     * @return string|null
     */
    public function getImportFormat(): ?string
    {
        return $this->importFormat;
    }
    /**
     * Set importFormat value
     * @param string $importFormat
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementSettingDTO
     */
    public function setImportFormat(?string $importFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($importFormat) && !is_string($importFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importFormat, true), gettype($importFormat)), __LINE__);
        }
        $this->importFormat = $importFormat;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementSettingDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementSettingDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementSettingDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementSettingDTO
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
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementSettingDTO
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get validTo value
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementSettingDTO
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        $this->validTo = $validTo;
        
        return $this;
    }
}
