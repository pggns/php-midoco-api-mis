<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VirtualCreditCardDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VirtualCreditCardDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The addressline1
     * @var string|null
     */
    protected ?string $addressline1 = null;
    /**
     * The addressline2
     * @var string|null
     */
    protected ?string $addressline2 = null;
    /**
     * The addressline3
     * @var string|null
     */
    protected ?string $addressline3 = null;
    /**
     * The addressline4
     * @var string|null
     */
    protected ?string $addressline4 = null;
    /**
     * The avv
     * @var string|null
     */
    protected ?string $avv = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The cardNo
     * @var string|null
     */
    protected ?string $cardNo = null;
    /**
     * The cardType
     * @var string|null
     */
    protected ?string $cardType = null;
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The documentNo
     * @var int|null
     */
    protected ?int $documentNo = null;
    /**
     * The externalCardId
     * @var string|null
     */
    protected ?string $externalCardId = null;
    /**
     * The isActive
     * @var bool|null
     */
    protected ?bool $isActive = null;
    /**
     * The issuer
     * @var string|null
     */
    protected ?string $issuer = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The limitAmount
     * @var float|null
     */
    protected ?float $limitAmount = null;
    /**
     * The limitCurrency
     * @var string|null
     */
    protected ?string $limitCurrency = null;
    /**
     * The merchantCountry
     * @var string|null
     */
    protected ?string $merchantCountry = null;
    /**
     * The merchantName
     * @var string|null
     */
    protected ?string $merchantName = null;
    /**
     * The modifyTimestamp
     * @var string|null
     */
    protected ?string $modifyTimestamp = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The owner
     * @var string|null
     */
    protected ?string $owner = null;
    /**
     * The serviceType
     * @var string|null
     */
    protected ?string $serviceType = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The tokenChecked
     * @var bool|null
     */
    protected ?bool $tokenChecked = null;
    /**
     * The transactionCurrency
     * @var string|null
     */
    protected ?string $transactionCurrency = null;
    /**
     * The travelCardSubtype
     * @var string|null
     */
    protected ?string $travelCardSubtype = null;
    /**
     * The usedAdapter
     * @var string|null
     */
    protected ?string $usedAdapter = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validMonth
     * @var int|null
     */
    protected ?int $validMonth = null;
    /**
     * The validTo
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * The validYear
     * @var int|null
     */
    protected ?int $validYear = null;
    /**
     * The virtualCardId
     * @var int|null
     */
    protected ?int $virtualCardId = null;
    /**
     * Constructor method for VirtualCreditCardDTO
     * @uses VirtualCreditCardDTO::setAccountId()
     * @uses VirtualCreditCardDTO::setAddressline1()
     * @uses VirtualCreditCardDTO::setAddressline2()
     * @uses VirtualCreditCardDTO::setAddressline3()
     * @uses VirtualCreditCardDTO::setAddressline4()
     * @uses VirtualCreditCardDTO::setAvv()
     * @uses VirtualCreditCardDTO::setBookingId()
     * @uses VirtualCreditCardDTO::setCardNo()
     * @uses VirtualCreditCardDTO::setCardType()
     * @uses VirtualCreditCardDTO::setCreationTimestamp()
     * @uses VirtualCreditCardDTO::setCreationUser()
     * @uses VirtualCreditCardDTO::setCustomerId()
     * @uses VirtualCreditCardDTO::setDocumentId()
     * @uses VirtualCreditCardDTO::setDocumentNo()
     * @uses VirtualCreditCardDTO::setExternalCardId()
     * @uses VirtualCreditCardDTO::setIsActive()
     * @uses VirtualCreditCardDTO::setIssuer()
     * @uses VirtualCreditCardDTO::setItemId()
     * @uses VirtualCreditCardDTO::setLimitAmount()
     * @uses VirtualCreditCardDTO::setLimitCurrency()
     * @uses VirtualCreditCardDTO::setMerchantCountry()
     * @uses VirtualCreditCardDTO::setMerchantName()
     * @uses VirtualCreditCardDTO::setModifyTimestamp()
     * @uses VirtualCreditCardDTO::setModifyUser()
     * @uses VirtualCreditCardDTO::setOrderId()
     * @uses VirtualCreditCardDTO::setOrderNo()
     * @uses VirtualCreditCardDTO::setOwner()
     * @uses VirtualCreditCardDTO::setServiceType()
     * @uses VirtualCreditCardDTO::setSupplierId()
     * @uses VirtualCreditCardDTO::setTokenChecked()
     * @uses VirtualCreditCardDTO::setTransactionCurrency()
     * @uses VirtualCreditCardDTO::setTravelCardSubtype()
     * @uses VirtualCreditCardDTO::setUsedAdapter()
     * @uses VirtualCreditCardDTO::setValidFrom()
     * @uses VirtualCreditCardDTO::setValidMonth()
     * @uses VirtualCreditCardDTO::setValidTo()
     * @uses VirtualCreditCardDTO::setValidYear()
     * @uses VirtualCreditCardDTO::setVirtualCardId()
     * @param string $accountId
     * @param string $addressline1
     * @param string $addressline2
     * @param string $addressline3
     * @param string $addressline4
     * @param string $avv
     * @param string $bookingId
     * @param string $cardNo
     * @param string $cardType
     * @param string $creationTimestamp
     * @param int $creationUser
     * @param int $customerId
     * @param int $documentId
     * @param int $documentNo
     * @param string $externalCardId
     * @param bool $isActive
     * @param string $issuer
     * @param int $itemId
     * @param float $limitAmount
     * @param string $limitCurrency
     * @param string $merchantCountry
     * @param string $merchantName
     * @param string $modifyTimestamp
     * @param int $modifyUser
     * @param int $orderId
     * @param int $orderNo
     * @param string $owner
     * @param string $serviceType
     * @param string $supplierId
     * @param bool $tokenChecked
     * @param string $transactionCurrency
     * @param string $travelCardSubtype
     * @param string $usedAdapter
     * @param string $validFrom
     * @param int $validMonth
     * @param string $validTo
     * @param int $validYear
     * @param int $virtualCardId
     */
    public function __construct(?string $accountId = null, ?string $addressline1 = null, ?string $addressline2 = null, ?string $addressline3 = null, ?string $addressline4 = null, ?string $avv = null, ?string $bookingId = null, ?string $cardNo = null, ?string $cardType = null, ?string $creationTimestamp = null, ?int $creationUser = null, ?int $customerId = null, ?int $documentId = null, ?int $documentNo = null, ?string $externalCardId = null, ?bool $isActive = null, ?string $issuer = null, ?int $itemId = null, ?float $limitAmount = null, ?string $limitCurrency = null, ?string $merchantCountry = null, ?string $merchantName = null, ?string $modifyTimestamp = null, ?int $modifyUser = null, ?int $orderId = null, ?int $orderNo = null, ?string $owner = null, ?string $serviceType = null, ?string $supplierId = null, ?bool $tokenChecked = null, ?string $transactionCurrency = null, ?string $travelCardSubtype = null, ?string $usedAdapter = null, ?string $validFrom = null, ?int $validMonth = null, ?string $validTo = null, ?int $validYear = null, ?int $virtualCardId = null)
    {
        $this
            ->setAccountId($accountId)
            ->setAddressline1($addressline1)
            ->setAddressline2($addressline2)
            ->setAddressline3($addressline3)
            ->setAddressline4($addressline4)
            ->setAvv($avv)
            ->setBookingId($bookingId)
            ->setCardNo($cardNo)
            ->setCardType($cardType)
            ->setCreationTimestamp($creationTimestamp)
            ->setCreationUser($creationUser)
            ->setCustomerId($customerId)
            ->setDocumentId($documentId)
            ->setDocumentNo($documentNo)
            ->setExternalCardId($externalCardId)
            ->setIsActive($isActive)
            ->setIssuer($issuer)
            ->setItemId($itemId)
            ->setLimitAmount($limitAmount)
            ->setLimitCurrency($limitCurrency)
            ->setMerchantCountry($merchantCountry)
            ->setMerchantName($merchantName)
            ->setModifyTimestamp($modifyTimestamp)
            ->setModifyUser($modifyUser)
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setOwner($owner)
            ->setServiceType($serviceType)
            ->setSupplierId($supplierId)
            ->setTokenChecked($tokenChecked)
            ->setTransactionCurrency($transactionCurrency)
            ->setTravelCardSubtype($travelCardSubtype)
            ->setUsedAdapter($usedAdapter)
            ->setValidFrom($validFrom)
            ->setValidMonth($validMonth)
            ->setValidTo($validTo)
            ->setValidYear($validYear)
            ->setVirtualCardId($virtualCardId);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get addressline1 value
     * @return string|null
     */
    public function getAddressline1(): ?string
    {
        return $this->addressline1;
    }
    /**
     * Set addressline1 value
     * @param string $addressline1
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setAddressline1(?string $addressline1 = null): self
    {
        // validation for constraint: string
        if (!is_null($addressline1) && !is_string($addressline1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressline1, true), gettype($addressline1)), __LINE__);
        }
        $this->addressline1 = $addressline1;
        
        return $this;
    }
    /**
     * Get addressline2 value
     * @return string|null
     */
    public function getAddressline2(): ?string
    {
        return $this->addressline2;
    }
    /**
     * Set addressline2 value
     * @param string $addressline2
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setAddressline2(?string $addressline2 = null): self
    {
        // validation for constraint: string
        if (!is_null($addressline2) && !is_string($addressline2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressline2, true), gettype($addressline2)), __LINE__);
        }
        $this->addressline2 = $addressline2;
        
        return $this;
    }
    /**
     * Get addressline3 value
     * @return string|null
     */
    public function getAddressline3(): ?string
    {
        return $this->addressline3;
    }
    /**
     * Set addressline3 value
     * @param string $addressline3
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setAddressline3(?string $addressline3 = null): self
    {
        // validation for constraint: string
        if (!is_null($addressline3) && !is_string($addressline3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressline3, true), gettype($addressline3)), __LINE__);
        }
        $this->addressline3 = $addressline3;
        
        return $this;
    }
    /**
     * Get addressline4 value
     * @return string|null
     */
    public function getAddressline4(): ?string
    {
        return $this->addressline4;
    }
    /**
     * Set addressline4 value
     * @param string $addressline4
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setAddressline4(?string $addressline4 = null): self
    {
        // validation for constraint: string
        if (!is_null($addressline4) && !is_string($addressline4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressline4, true), gettype($addressline4)), __LINE__);
        }
        $this->addressline4 = $addressline4;
        
        return $this;
    }
    /**
     * Get avv value
     * @return string|null
     */
    public function getAvv(): ?string
    {
        return $this->avv;
    }
    /**
     * Set avv value
     * @param string $avv
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setAvv(?string $avv = null): self
    {
        // validation for constraint: string
        if (!is_null($avv) && !is_string($avv)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($avv, true), gettype($avv)), __LINE__);
        }
        $this->avv = $avv;
        
        return $this;
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get cardNo value
     * @return string|null
     */
    public function getCardNo(): ?string
    {
        return $this->cardNo;
    }
    /**
     * Set cardNo value
     * @param string $cardNo
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setCardNo(?string $cardNo = null): self
    {
        // validation for constraint: string
        if (!is_null($cardNo) && !is_string($cardNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardNo, true), gettype($cardNo)), __LINE__);
        }
        $this->cardNo = $cardNo;
        
        return $this;
    }
    /**
     * Get cardType value
     * @return string|null
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }
    /**
     * Set cardType value
     * @param string $cardType
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setCardType(?string $cardType = null): self
    {
        // validation for constraint: string
        if (!is_null($cardType) && !is_string($cardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardType, true), gettype($cardType)), __LINE__);
        }
        $this->cardType = $cardType;
        
        return $this;
    }
    /**
     * Get creationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp(): ?string
    {
        return $this->creationTimestamp;
    }
    /**
     * Set creationTimestamp value
     * @param string $creationTimestamp
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setCreationTimestamp(?string $creationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimestamp, true), gettype($creationTimestamp)), __LINE__);
        }
        $this->creationTimestamp = $creationTimestamp;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
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
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get documentNo value
     * @return int|null
     */
    public function getDocumentNo(): ?int
    {
        return $this->documentNo;
    }
    /**
     * Set documentNo value
     * @param int $documentNo
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setDocumentNo(?int $documentNo = null): self
    {
        // validation for constraint: int
        if (!is_null($documentNo) && !(is_int($documentNo) || ctype_digit($documentNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentNo, true), gettype($documentNo)), __LINE__);
        }
        $this->documentNo = $documentNo;
        
        return $this;
    }
    /**
     * Get externalCardId value
     * @return string|null
     */
    public function getExternalCardId(): ?string
    {
        return $this->externalCardId;
    }
    /**
     * Set externalCardId value
     * @param string $externalCardId
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setExternalCardId(?string $externalCardId = null): self
    {
        // validation for constraint: string
        if (!is_null($externalCardId) && !is_string($externalCardId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalCardId, true), gettype($externalCardId)), __LINE__);
        }
        $this->externalCardId = $externalCardId;
        
        return $this;
    }
    /**
     * Get isActive value
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }
    /**
     * Set isActive value
     * @param bool $isActive
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setIsActive(?bool $isActive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isActive) && !is_bool($isActive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isActive, true), gettype($isActive)), __LINE__);
        }
        $this->isActive = $isActive;
        
        return $this;
    }
    /**
     * Get issuer value
     * @return string|null
     */
    public function getIssuer(): ?string
    {
        return $this->issuer;
    }
    /**
     * Set issuer value
     * @param string $issuer
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setIssuer(?string $issuer = null): self
    {
        // validation for constraint: string
        if (!is_null($issuer) && !is_string($issuer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issuer, true), gettype($issuer)), __LINE__);
        }
        $this->issuer = $issuer;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get limitAmount value
     * @return float|null
     */
    public function getLimitAmount(): ?float
    {
        return $this->limitAmount;
    }
    /**
     * Set limitAmount value
     * @param float $limitAmount
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setLimitAmount(?float $limitAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($limitAmount) && !(is_float($limitAmount) || is_numeric($limitAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($limitAmount, true), gettype($limitAmount)), __LINE__);
        }
        $this->limitAmount = $limitAmount;
        
        return $this;
    }
    /**
     * Get limitCurrency value
     * @return string|null
     */
    public function getLimitCurrency(): ?string
    {
        return $this->limitCurrency;
    }
    /**
     * Set limitCurrency value
     * @param string $limitCurrency
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setLimitCurrency(?string $limitCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($limitCurrency) && !is_string($limitCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($limitCurrency, true), gettype($limitCurrency)), __LINE__);
        }
        $this->limitCurrency = $limitCurrency;
        
        return $this;
    }
    /**
     * Get merchantCountry value
     * @return string|null
     */
    public function getMerchantCountry(): ?string
    {
        return $this->merchantCountry;
    }
    /**
     * Set merchantCountry value
     * @param string $merchantCountry
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setMerchantCountry(?string $merchantCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($merchantCountry) && !is_string($merchantCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchantCountry, true), gettype($merchantCountry)), __LINE__);
        }
        $this->merchantCountry = $merchantCountry;
        
        return $this;
    }
    /**
     * Get merchantName value
     * @return string|null
     */
    public function getMerchantName(): ?string
    {
        return $this->merchantName;
    }
    /**
     * Set merchantName value
     * @param string $merchantName
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setMerchantName(?string $merchantName = null): self
    {
        // validation for constraint: string
        if (!is_null($merchantName) && !is_string($merchantName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($merchantName, true), gettype($merchantName)), __LINE__);
        }
        $this->merchantName = $merchantName;
        
        return $this;
    }
    /**
     * Get modifyTimestamp value
     * @return string|null
     */
    public function getModifyTimestamp(): ?string
    {
        return $this->modifyTimestamp;
    }
    /**
     * Set modifyTimestamp value
     * @param string $modifyTimestamp
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setModifyTimestamp(?string $modifyTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyTimestamp) && !is_string($modifyTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyTimestamp, true), gettype($modifyTimestamp)), __LINE__);
        }
        $this->modifyTimestamp = $modifyTimestamp;
        
        return $this;
    }
    /**
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get owner value
     * @return string|null
     */
    public function getOwner(): ?string
    {
        return $this->owner;
    }
    /**
     * Set owner value
     * @param string $owner
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setOwner(?string $owner = null): self
    {
        // validation for constraint: string
        if (!is_null($owner) && !is_string($owner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($owner, true), gettype($owner)), __LINE__);
        }
        $this->owner = $owner;
        
        return $this;
    }
    /**
     * Get serviceType value
     * @return string|null
     */
    public function getServiceType(): ?string
    {
        return $this->serviceType;
    }
    /**
     * Set serviceType value
     * @param string $serviceType
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setServiceType(?string $serviceType = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceType) && !is_string($serviceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceType, true), gettype($serviceType)), __LINE__);
        }
        $this->serviceType = $serviceType;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get tokenChecked value
     * @return bool|null
     */
    public function getTokenChecked(): ?bool
    {
        return $this->tokenChecked;
    }
    /**
     * Set tokenChecked value
     * @param bool $tokenChecked
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setTokenChecked(?bool $tokenChecked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($tokenChecked) && !is_bool($tokenChecked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tokenChecked, true), gettype($tokenChecked)), __LINE__);
        }
        $this->tokenChecked = $tokenChecked;
        
        return $this;
    }
    /**
     * Get transactionCurrency value
     * @return string|null
     */
    public function getTransactionCurrency(): ?string
    {
        return $this->transactionCurrency;
    }
    /**
     * Set transactionCurrency value
     * @param string $transactionCurrency
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setTransactionCurrency(?string $transactionCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionCurrency) && !is_string($transactionCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionCurrency, true), gettype($transactionCurrency)), __LINE__);
        }
        $this->transactionCurrency = $transactionCurrency;
        
        return $this;
    }
    /**
     * Get travelCardSubtype value
     * @return string|null
     */
    public function getTravelCardSubtype(): ?string
    {
        return $this->travelCardSubtype;
    }
    /**
     * Set travelCardSubtype value
     * @param string $travelCardSubtype
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setTravelCardSubtype(?string $travelCardSubtype = null): self
    {
        // validation for constraint: string
        if (!is_null($travelCardSubtype) && !is_string($travelCardSubtype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelCardSubtype, true), gettype($travelCardSubtype)), __LINE__);
        }
        $this->travelCardSubtype = $travelCardSubtype;
        
        return $this;
    }
    /**
     * Get usedAdapter value
     * @return string|null
     */
    public function getUsedAdapter(): ?string
    {
        return $this->usedAdapter;
    }
    /**
     * Set usedAdapter value
     * @param string $usedAdapter
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setUsedAdapter(?string $usedAdapter = null): self
    {
        // validation for constraint: string
        if (!is_null($usedAdapter) && !is_string($usedAdapter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($usedAdapter, true), gettype($usedAdapter)), __LINE__);
        }
        $this->usedAdapter = $usedAdapter;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
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
     * Get validMonth value
     * @return int|null
     */
    public function getValidMonth(): ?int
    {
        return $this->validMonth;
    }
    /**
     * Set validMonth value
     * @param int $validMonth
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setValidMonth(?int $validMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($validMonth) && !(is_int($validMonth) || ctype_digit($validMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($validMonth, true), gettype($validMonth)), __LINE__);
        }
        $this->validMonth = $validMonth;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
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
    /**
     * Get validYear value
     * @return int|null
     */
    public function getValidYear(): ?int
    {
        return $this->validYear;
    }
    /**
     * Set validYear value
     * @param int $validYear
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setValidYear(?int $validYear = null): self
    {
        // validation for constraint: int
        if (!is_null($validYear) && !(is_int($validYear) || ctype_digit($validYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($validYear, true), gettype($validYear)), __LINE__);
        }
        $this->validYear = $validYear;
        
        return $this;
    }
    /**
     * Get virtualCardId value
     * @return int|null
     */
    public function getVirtualCardId(): ?int
    {
        return $this->virtualCardId;
    }
    /**
     * Set virtualCardId value
     * @param int $virtualCardId
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardDTO
     */
    public function setVirtualCardId(?int $virtualCardId = null): self
    {
        // validation for constraint: int
        if (!is_null($virtualCardId) && !(is_int($virtualCardId) || ctype_digit($virtualCardId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($virtualCardId, true), gettype($virtualCardId)), __LINE__);
        }
        $this->virtualCardId = $virtualCardId;
        
        return $this;
    }
}
