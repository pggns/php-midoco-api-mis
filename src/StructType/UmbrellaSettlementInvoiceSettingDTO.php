<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementInvoiceSettingDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementInvoiceSettingDTO extends AbstractStructBase
{
    /**
     * The bankAccountId
     * @var int|null
     */
    protected ?int $bankAccountId = null;
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
     * The defaultAccountId
     * @var int|null
     */
    protected ?int $defaultAccountId = null;
    /**
     * The defaultTaxId
     * @var int|null
     */
    protected ?int $defaultTaxId = null;
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
     * The nbDecimalsAmount
     * @var int|null
     */
    protected ?int $nbDecimalsAmount = null;
    /**
     * The nbDecimalsPrice
     * @var int|null
     */
    protected ?int $nbDecimalsPrice = null;
    /**
     * The paymentTypeId
     * @var int|null
     */
    protected ?int $paymentTypeId = null;
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
     * Constructor method for UmbrellaSettlementInvoiceSettingDTO
     * @uses UmbrellaSettlementInvoiceSettingDTO::setBankAccountId()
     * @uses UmbrellaSettlementInvoiceSettingDTO::setCurrencyId()
     * @uses UmbrellaSettlementInvoiceSettingDTO::setCustomerId()
     * @uses UmbrellaSettlementInvoiceSettingDTO::setDefaultAccountId()
     * @uses UmbrellaSettlementInvoiceSettingDTO::setDefaultTaxId()
     * @uses UmbrellaSettlementInvoiceSettingDTO::setLanguageId()
     * @uses UmbrellaSettlementInvoiceSettingDTO::setMwstIsNet()
     * @uses UmbrellaSettlementInvoiceSettingDTO::setMwstType()
     * @uses UmbrellaSettlementInvoiceSettingDTO::setNbDecimalsAmount()
     * @uses UmbrellaSettlementInvoiceSettingDTO::setNbDecimalsPrice()
     * @uses UmbrellaSettlementInvoiceSettingDTO::setPaymentTypeId()
     * @uses UmbrellaSettlementInvoiceSettingDTO::setShowPositionTaxes()
     * @uses UmbrellaSettlementInvoiceSettingDTO::setTitle()
     * @param int $bankAccountId
     * @param int $currencyId
     * @param int $customerId
     * @param int $defaultAccountId
     * @param int $defaultTaxId
     * @param int $languageId
     * @param bool $mwstIsNet
     * @param int $mwstType
     * @param int $nbDecimalsAmount
     * @param int $nbDecimalsPrice
     * @param int $paymentTypeId
     * @param bool $showPositionTaxes
     * @param string $title
     */
    public function __construct(?int $bankAccountId = null, ?int $currencyId = null, ?int $customerId = null, ?int $defaultAccountId = null, ?int $defaultTaxId = null, ?int $languageId = null, ?bool $mwstIsNet = null, ?int $mwstType = null, ?int $nbDecimalsAmount = null, ?int $nbDecimalsPrice = null, ?int $paymentTypeId = null, ?bool $showPositionTaxes = null, ?string $title = null)
    {
        $this
            ->setBankAccountId($bankAccountId)
            ->setCurrencyId($currencyId)
            ->setCustomerId($customerId)
            ->setDefaultAccountId($defaultAccountId)
            ->setDefaultTaxId($defaultTaxId)
            ->setLanguageId($languageId)
            ->setMwstIsNet($mwstIsNet)
            ->setMwstType($mwstType)
            ->setNbDecimalsAmount($nbDecimalsAmount)
            ->setNbDecimalsPrice($nbDecimalsPrice)
            ->setPaymentTypeId($paymentTypeId)
            ->setShowPositionTaxes($showPositionTaxes)
            ->setTitle($title);
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementInvoiceSettingDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementInvoiceSettingDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementInvoiceSettingDTO
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
     * Get defaultAccountId value
     * @return int|null
     */
    public function getDefaultAccountId(): ?int
    {
        return $this->defaultAccountId;
    }
    /**
     * Set defaultAccountId value
     * @param int $defaultAccountId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementInvoiceSettingDTO
     */
    public function setDefaultAccountId(?int $defaultAccountId = null): self
    {
        // validation for constraint: int
        if (!is_null($defaultAccountId) && !(is_int($defaultAccountId) || ctype_digit($defaultAccountId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($defaultAccountId, true), gettype($defaultAccountId)), __LINE__);
        }
        $this->defaultAccountId = $defaultAccountId;
        
        return $this;
    }
    /**
     * Get defaultTaxId value
     * @return int|null
     */
    public function getDefaultTaxId(): ?int
    {
        return $this->defaultTaxId;
    }
    /**
     * Set defaultTaxId value
     * @param int $defaultTaxId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementInvoiceSettingDTO
     */
    public function setDefaultTaxId(?int $defaultTaxId = null): self
    {
        // validation for constraint: int
        if (!is_null($defaultTaxId) && !(is_int($defaultTaxId) || ctype_digit($defaultTaxId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($defaultTaxId, true), gettype($defaultTaxId)), __LINE__);
        }
        $this->defaultTaxId = $defaultTaxId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementInvoiceSettingDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementInvoiceSettingDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementInvoiceSettingDTO
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
     * Get nbDecimalsAmount value
     * @return int|null
     */
    public function getNbDecimalsAmount(): ?int
    {
        return $this->nbDecimalsAmount;
    }
    /**
     * Set nbDecimalsAmount value
     * @param int $nbDecimalsAmount
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementInvoiceSettingDTO
     */
    public function setNbDecimalsAmount(?int $nbDecimalsAmount = null): self
    {
        // validation for constraint: int
        if (!is_null($nbDecimalsAmount) && !(is_int($nbDecimalsAmount) || ctype_digit($nbDecimalsAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nbDecimalsAmount, true), gettype($nbDecimalsAmount)), __LINE__);
        }
        $this->nbDecimalsAmount = $nbDecimalsAmount;
        
        return $this;
    }
    /**
     * Get nbDecimalsPrice value
     * @return int|null
     */
    public function getNbDecimalsPrice(): ?int
    {
        return $this->nbDecimalsPrice;
    }
    /**
     * Set nbDecimalsPrice value
     * @param int $nbDecimalsPrice
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementInvoiceSettingDTO
     */
    public function setNbDecimalsPrice(?int $nbDecimalsPrice = null): self
    {
        // validation for constraint: int
        if (!is_null($nbDecimalsPrice) && !(is_int($nbDecimalsPrice) || ctype_digit($nbDecimalsPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nbDecimalsPrice, true), gettype($nbDecimalsPrice)), __LINE__);
        }
        $this->nbDecimalsPrice = $nbDecimalsPrice;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementInvoiceSettingDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementInvoiceSettingDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementInvoiceSettingDTO
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
}
