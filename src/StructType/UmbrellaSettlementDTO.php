<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementDTO extends AbstractStructBase
{
    /**
     * The apiReference
     * @var string|null
     */
    protected ?string $apiReference = null;
    /**
     * The bankAccountId
     * @var int|null
     */
    protected ?int $bankAccountId = null;
    /**
     * The contactId
     * @var int|null
     */
    protected ?int $contactId = null;
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
     * The currencyId
     * @var int|null
     */
    protected ?int $currencyId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The documentNr
     * @var string|null
     */
    protected ?string $documentNr = null;
    /**
     * The invoiceId
     * @var int|null
     */
    protected ?int $invoiceId = null;
    /**
     * The languageId
     * @var int|null
     */
    protected ?int $languageId = null;
    /**
     * The mwstIsNet
     * @var bool|null
     */
    protected ?bool $mwstIsNet = null;
    /**
     * The mwstType
     * @var int|null
     */
    protected ?int $mwstType = null;
    /**
     * The networkLink
     * @var string|null
     */
    protected ?string $networkLink = null;
    /**
     * The paymentTypeId
     * @var int|null
     */
    protected ?int $paymentTypeId = null;
    /**
     * The reference
     * @var string|null
     */
    protected ?string $reference = null;
    /**
     * The remoteStatus
     * @var string|null
     */
    protected ?string $remoteStatus = null;
    /**
     * The remoteStatusUpdated
     * @var string|null
     */
    protected ?string $remoteStatusUpdated = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The settlementMonthId
     * @var int|null
     */
    protected ?int $settlementMonthId = null;
    /**
     * The showPositionTaxes
     * @var bool|null
     */
    protected ?bool $showPositionTaxes = null;
    /**
     * The title
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
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
     * Constructor method for UmbrellaSettlementDTO
     * @uses UmbrellaSettlementDTO::setApiReference()
     * @uses UmbrellaSettlementDTO::setBankAccountId()
     * @uses UmbrellaSettlementDTO::setContactId()
     * @uses UmbrellaSettlementDTO::setCreated()
     * @uses UmbrellaSettlementDTO::setCreatedBy()
     * @uses UmbrellaSettlementDTO::setCurrencyId()
     * @uses UmbrellaSettlementDTO::setCustomerId()
     * @uses UmbrellaSettlementDTO::setDocumentNr()
     * @uses UmbrellaSettlementDTO::setInvoiceId()
     * @uses UmbrellaSettlementDTO::setLanguageId()
     * @uses UmbrellaSettlementDTO::setMwstIsNet()
     * @uses UmbrellaSettlementDTO::setMwstType()
     * @uses UmbrellaSettlementDTO::setNetworkLink()
     * @uses UmbrellaSettlementDTO::setPaymentTypeId()
     * @uses UmbrellaSettlementDTO::setReference()
     * @uses UmbrellaSettlementDTO::setRemoteStatus()
     * @uses UmbrellaSettlementDTO::setRemoteStatusUpdated()
     * @uses UmbrellaSettlementDTO::setSettlementId()
     * @uses UmbrellaSettlementDTO::setSettlementMonthId()
     * @uses UmbrellaSettlementDTO::setShowPositionTaxes()
     * @uses UmbrellaSettlementDTO::setTitle()
     * @uses UmbrellaSettlementDTO::setUserId()
     * @uses UmbrellaSettlementDTO::setValidFrom()
     * @uses UmbrellaSettlementDTO::setValidTo()
     * @param string $apiReference
     * @param int $bankAccountId
     * @param int $contactId
     * @param string $created
     * @param int $createdBy
     * @param int $currencyId
     * @param int $customerId
     * @param string $documentNr
     * @param int $invoiceId
     * @param int $languageId
     * @param bool $mwstIsNet
     * @param int $mwstType
     * @param string $networkLink
     * @param int $paymentTypeId
     * @param string $reference
     * @param string $remoteStatus
     * @param string $remoteStatusUpdated
     * @param int $settlementId
     * @param int $settlementMonthId
     * @param bool $showPositionTaxes
     * @param string $title
     * @param int $userId
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(?string $apiReference = null, ?int $bankAccountId = null, ?int $contactId = null, ?string $created = null, ?int $createdBy = null, ?int $currencyId = null, ?int $customerId = null, ?string $documentNr = null, ?int $invoiceId = null, ?int $languageId = null, ?bool $mwstIsNet = null, ?int $mwstType = null, ?string $networkLink = null, ?int $paymentTypeId = null, ?string $reference = null, ?string $remoteStatus = null, ?string $remoteStatusUpdated = null, ?int $settlementId = null, ?int $settlementMonthId = null, ?bool $showPositionTaxes = null, ?string $title = null, ?int $userId = null, ?string $validFrom = null, ?string $validTo = null)
    {
        $this
            ->setApiReference($apiReference)
            ->setBankAccountId($bankAccountId)
            ->setContactId($contactId)
            ->setCreated($created)
            ->setCreatedBy($createdBy)
            ->setCurrencyId($currencyId)
            ->setCustomerId($customerId)
            ->setDocumentNr($documentNr)
            ->setInvoiceId($invoiceId)
            ->setLanguageId($languageId)
            ->setMwstIsNet($mwstIsNet)
            ->setMwstType($mwstType)
            ->setNetworkLink($networkLink)
            ->setPaymentTypeId($paymentTypeId)
            ->setReference($reference)
            ->setRemoteStatus($remoteStatus)
            ->setRemoteStatusUpdated($remoteStatusUpdated)
            ->setSettlementId($settlementId)
            ->setSettlementMonthId($settlementMonthId)
            ->setShowPositionTaxes($showPositionTaxes)
            ->setTitle($title)
            ->setUserId($userId)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
    }
    /**
     * Get apiReference value
     * @return string|null
     */
    public function getApiReference(): ?string
    {
        return $this->apiReference;
    }
    /**
     * Set apiReference value
     * @param string $apiReference
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
     */
    public function setApiReference(?string $apiReference = null): self
    {
        // validation for constraint: string
        if (!is_null($apiReference) && !is_string($apiReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apiReference, true), gettype($apiReference)), __LINE__);
        }
        $this->apiReference = $apiReference;
        
        return $this;
    }
    /**
     * Get bankAccountId value
     * @return int|null
     */
    public function getBankAccountId(): ?int
    {
        return $this->bankAccountId;
    }
    /**
     * Set bankAccountId value
     * @param int $bankAccountId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
     */
    public function setBankAccountId(?int $bankAccountId = null): self
    {
        // validation for constraint: int
        if (!is_null($bankAccountId) && !(is_int($bankAccountId) || ctype_digit($bankAccountId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bankAccountId, true), gettype($bankAccountId)), __LINE__);
        }
        $this->bankAccountId = $bankAccountId;
        
        return $this;
    }
    /**
     * Get contactId value
     * @return int|null
     */
    public function getContactId(): ?int
    {
        return $this->contactId;
    }
    /**
     * Set contactId value
     * @param int $contactId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
     */
    public function setContactId(?int $contactId = null): self
    {
        // validation for constraint: int
        if (!is_null($contactId) && !(is_int($contactId) || ctype_digit($contactId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($contactId, true), gettype($contactId)), __LINE__);
        }
        $this->contactId = $contactId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
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
     * Get currencyId value
     * @return int|null
     */
    public function getCurrencyId(): ?int
    {
        return $this->currencyId;
    }
    /**
     * Set currencyId value
     * @param int $currencyId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
     */
    public function setCurrencyId(?int $currencyId = null): self
    {
        // validation for constraint: int
        if (!is_null($currencyId) && !(is_int($currencyId) || ctype_digit($currencyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($currencyId, true), gettype($currencyId)), __LINE__);
        }
        $this->currencyId = $currencyId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
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
     * Get documentNr value
     * @return string|null
     */
    public function getDocumentNr(): ?string
    {
        return $this->documentNr;
    }
    /**
     * Set documentNr value
     * @param string $documentNr
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
     */
    public function setDocumentNr(?string $documentNr = null): self
    {
        // validation for constraint: string
        if (!is_null($documentNr) && !is_string($documentNr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNr, true), gettype($documentNr)), __LINE__);
        }
        $this->documentNr = $documentNr;
        
        return $this;
    }
    /**
     * Get invoiceId value
     * @return int|null
     */
    public function getInvoiceId(): ?int
    {
        return $this->invoiceId;
    }
    /**
     * Set invoiceId value
     * @param int $invoiceId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
     */
    public function setInvoiceId(?int $invoiceId = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceId) && !(is_int($invoiceId) || ctype_digit($invoiceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceId, true), gettype($invoiceId)), __LINE__);
        }
        $this->invoiceId = $invoiceId;
        
        return $this;
    }
    /**
     * Get languageId value
     * @return int|null
     */
    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }
    /**
     * Set languageId value
     * @param int $languageId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
     */
    public function setLanguageId(?int $languageId = null): self
    {
        // validation for constraint: int
        if (!is_null($languageId) && !(is_int($languageId) || ctype_digit($languageId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($languageId, true), gettype($languageId)), __LINE__);
        }
        $this->languageId = $languageId;
        
        return $this;
    }
    /**
     * Get mwstIsNet value
     * @return bool|null
     */
    public function getMwstIsNet(): ?bool
    {
        return $this->mwstIsNet;
    }
    /**
     * Set mwstIsNet value
     * @param bool $mwstIsNet
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
     */
    public function setMwstIsNet(?bool $mwstIsNet = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mwstIsNet) && !is_bool($mwstIsNet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mwstIsNet, true), gettype($mwstIsNet)), __LINE__);
        }
        $this->mwstIsNet = $mwstIsNet;
        
        return $this;
    }
    /**
     * Get mwstType value
     * @return int|null
     */
    public function getMwstType(): ?int
    {
        return $this->mwstType;
    }
    /**
     * Set mwstType value
     * @param int $mwstType
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
     */
    public function setMwstType(?int $mwstType = null): self
    {
        // validation for constraint: int
        if (!is_null($mwstType) && !(is_int($mwstType) || ctype_digit($mwstType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mwstType, true), gettype($mwstType)), __LINE__);
        }
        $this->mwstType = $mwstType;
        
        return $this;
    }
    /**
     * Get networkLink value
     * @return string|null
     */
    public function getNetworkLink(): ?string
    {
        return $this->networkLink;
    }
    /**
     * Set networkLink value
     * @param string $networkLink
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
     */
    public function setNetworkLink(?string $networkLink = null): self
    {
        // validation for constraint: string
        if (!is_null($networkLink) && !is_string($networkLink)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($networkLink, true), gettype($networkLink)), __LINE__);
        }
        $this->networkLink = $networkLink;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
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
    /**
     * Get reference value
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }
    /**
     * Set reference value
     * @param string $reference
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
     */
    public function setReference(?string $reference = null): self
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), gettype($reference)), __LINE__);
        }
        $this->reference = $reference;
        
        return $this;
    }
    /**
     * Get remoteStatus value
     * @return string|null
     */
    public function getRemoteStatus(): ?string
    {
        return $this->remoteStatus;
    }
    /**
     * Set remoteStatus value
     * @param string $remoteStatus
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
     */
    public function setRemoteStatus(?string $remoteStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($remoteStatus) && !is_string($remoteStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remoteStatus, true), gettype($remoteStatus)), __LINE__);
        }
        $this->remoteStatus = $remoteStatus;
        
        return $this;
    }
    /**
     * Get remoteStatusUpdated value
     * @return string|null
     */
    public function getRemoteStatusUpdated(): ?string
    {
        return $this->remoteStatusUpdated;
    }
    /**
     * Set remoteStatusUpdated value
     * @param string $remoteStatusUpdated
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
     */
    public function setRemoteStatusUpdated(?string $remoteStatusUpdated = null): self
    {
        // validation for constraint: string
        if (!is_null($remoteStatusUpdated) && !is_string($remoteStatusUpdated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remoteStatusUpdated, true), gettype($remoteStatusUpdated)), __LINE__);
        }
        $this->remoteStatusUpdated = $remoteStatusUpdated;
        
        return $this;
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
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
     * Get showPositionTaxes value
     * @return bool|null
     */
    public function getShowPositionTaxes(): ?bool
    {
        return $this->showPositionTaxes;
    }
    /**
     * Set showPositionTaxes value
     * @param bool $showPositionTaxes
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
     */
    public function setShowPositionTaxes(?bool $showPositionTaxes = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showPositionTaxes) && !is_bool($showPositionTaxes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showPositionTaxes, true), gettype($showPositionTaxes)), __LINE__);
        }
        $this->showPositionTaxes = $showPositionTaxes;
        
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->title = $title;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementDTO
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
