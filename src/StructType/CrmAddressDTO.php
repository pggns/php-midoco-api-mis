<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmAddressDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmAddressDTO extends AbstractStructBase
{
    /**
     * The addressId
     * @var int|null
     */
    protected ?int $addressId = null;
    /**
     * The addressTypeId
     * @var int|null
     */
    protected ?int $addressTypeId = null;
    /**
     * The checkStatus
     * @var string|null
     */
    protected ?string $checkStatus = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The consentTimestamp
     * @var string|null
     */
    protected ?string $consentTimestamp = null;
    /**
     * The countryCode
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
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
     * The endorsement
     * @var string|null
     */
    protected ?string $endorsement = null;
    /**
     * The externalConsentId
     * @var string|null
     */
    protected ?string $externalConsentId = null;
    /**
     * The mailingProhibited
     * @var bool|null
     */
    protected ?bool $mailingProhibited = null;
    /**
     * The mailingStatus
     * @var string|null
     */
    protected ?string $mailingStatus = null;
    /**
     * The mailingStatusModifyDate
     * @var string|null
     */
    protected ?string $mailingStatusModifyDate = null;
    /**
     * The mailingStatusModifyUser
     * @var int|null
     */
    protected ?int $mailingStatusModifyUser = null;
    /**
     * The modifyDate
     * @var string|null
     */
    protected ?string $modifyDate = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The postOfficeBox
     * @var string|null
     */
    protected ?string $postOfficeBox = null;
    /**
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The state
     * @var string|null
     */
    protected ?string $state = null;
    /**
     * The stateId
     * @var string|null
     */
    protected ?string $stateId = null;
    /**
     * The street
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The streetNo
     * @var string|null
     */
    protected ?string $streetNo = null;
    /**
     * The validated
     * @var bool|null
     */
    protected ?bool $validated = null;
    /**
     * Constructor method for CrmAddressDTO
     * @uses CrmAddressDTO::setAddressId()
     * @uses CrmAddressDTO::setAddressTypeId()
     * @uses CrmAddressDTO::setCheckStatus()
     * @uses CrmAddressDTO::setCity()
     * @uses CrmAddressDTO::setConsentTimestamp()
     * @uses CrmAddressDTO::setCountryCode()
     * @uses CrmAddressDTO::setCreationDate()
     * @uses CrmAddressDTO::setCreationUser()
     * @uses CrmAddressDTO::setCustomerId()
     * @uses CrmAddressDTO::setEndorsement()
     * @uses CrmAddressDTO::setExternalConsentId()
     * @uses CrmAddressDTO::setMailingProhibited()
     * @uses CrmAddressDTO::setMailingStatus()
     * @uses CrmAddressDTO::setMailingStatusModifyDate()
     * @uses CrmAddressDTO::setMailingStatusModifyUser()
     * @uses CrmAddressDTO::setModifyDate()
     * @uses CrmAddressDTO::setModifyUser()
     * @uses CrmAddressDTO::setPostOfficeBox()
     * @uses CrmAddressDTO::setPostalCode()
     * @uses CrmAddressDTO::setState()
     * @uses CrmAddressDTO::setStateId()
     * @uses CrmAddressDTO::setStreet()
     * @uses CrmAddressDTO::setStreetNo()
     * @uses CrmAddressDTO::setValidated()
     * @param int $addressId
     * @param int $addressTypeId
     * @param string $checkStatus
     * @param string $city
     * @param string $consentTimestamp
     * @param string $countryCode
     * @param string $creationDate
     * @param int $creationUser
     * @param int $customerId
     * @param string $endorsement
     * @param string $externalConsentId
     * @param bool $mailingProhibited
     * @param string $mailingStatus
     * @param string $mailingStatusModifyDate
     * @param int $mailingStatusModifyUser
     * @param string $modifyDate
     * @param int $modifyUser
     * @param string $postOfficeBox
     * @param string $postalCode
     * @param string $state
     * @param string $stateId
     * @param string $street
     * @param string $streetNo
     * @param bool $validated
     */
    public function __construct(?int $addressId = null, ?int $addressTypeId = null, ?string $checkStatus = null, ?string $city = null, ?string $consentTimestamp = null, ?string $countryCode = null, ?string $creationDate = null, ?int $creationUser = null, ?int $customerId = null, ?string $endorsement = null, ?string $externalConsentId = null, ?bool $mailingProhibited = null, ?string $mailingStatus = null, ?string $mailingStatusModifyDate = null, ?int $mailingStatusModifyUser = null, ?string $modifyDate = null, ?int $modifyUser = null, ?string $postOfficeBox = null, ?string $postalCode = null, ?string $state = null, ?string $stateId = null, ?string $street = null, ?string $streetNo = null, ?bool $validated = null)
    {
        $this
            ->setAddressId($addressId)
            ->setAddressTypeId($addressTypeId)
            ->setCheckStatus($checkStatus)
            ->setCity($city)
            ->setConsentTimestamp($consentTimestamp)
            ->setCountryCode($countryCode)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setCustomerId($customerId)
            ->setEndorsement($endorsement)
            ->setExternalConsentId($externalConsentId)
            ->setMailingProhibited($mailingProhibited)
            ->setMailingStatus($mailingStatus)
            ->setMailingStatusModifyDate($mailingStatusModifyDate)
            ->setMailingStatusModifyUser($mailingStatusModifyUser)
            ->setModifyDate($modifyDate)
            ->setModifyUser($modifyUser)
            ->setPostOfficeBox($postOfficeBox)
            ->setPostalCode($postalCode)
            ->setState($state)
            ->setStateId($stateId)
            ->setStreet($street)
            ->setStreetNo($streetNo)
            ->setValidated($validated);
    }
    /**
     * Get addressId value
     * @return int|null
     */
    public function getAddressId(): ?int
    {
        return $this->addressId;
    }
    /**
     * Set addressId value
     * @param int $addressId
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
     */
    public function setAddressId(?int $addressId = null): self
    {
        // validation for constraint: int
        if (!is_null($addressId) && !(is_int($addressId) || ctype_digit($addressId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addressId, true), gettype($addressId)), __LINE__);
        }
        $this->addressId = $addressId;
        
        return $this;
    }
    /**
     * Get addressTypeId value
     * @return int|null
     */
    public function getAddressTypeId(): ?int
    {
        return $this->addressTypeId;
    }
    /**
     * Set addressTypeId value
     * @param int $addressTypeId
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
     */
    public function setAddressTypeId(?int $addressTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($addressTypeId) && !(is_int($addressTypeId) || ctype_digit($addressTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addressTypeId, true), gettype($addressTypeId)), __LINE__);
        }
        $this->addressTypeId = $addressTypeId;
        
        return $this;
    }
    /**
     * Get checkStatus value
     * @return string|null
     */
    public function getCheckStatus(): ?string
    {
        return $this->checkStatus;
    }
    /**
     * Set checkStatus value
     * @param string $checkStatus
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
     */
    public function setCheckStatus(?string $checkStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($checkStatus) && !is_string($checkStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checkStatus, true), gettype($checkStatus)), __LINE__);
        }
        $this->checkStatus = $checkStatus;
        
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get consentTimestamp value
     * @return string|null
     */
    public function getConsentTimestamp(): ?string
    {
        return $this->consentTimestamp;
    }
    /**
     * Set consentTimestamp value
     * @param string $consentTimestamp
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
     */
    public function setConsentTimestamp(?string $consentTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($consentTimestamp) && !is_string($consentTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consentTimestamp, true), gettype($consentTimestamp)), __LINE__);
        }
        $this->consentTimestamp = $consentTimestamp;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
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
     * Get endorsement value
     * @return string|null
     */
    public function getEndorsement(): ?string
    {
        return $this->endorsement;
    }
    /**
     * Set endorsement value
     * @param string $endorsement
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
     */
    public function setEndorsement(?string $endorsement = null): self
    {
        // validation for constraint: string
        if (!is_null($endorsement) && !is_string($endorsement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endorsement, true), gettype($endorsement)), __LINE__);
        }
        $this->endorsement = $endorsement;
        
        return $this;
    }
    /**
     * Get externalConsentId value
     * @return string|null
     */
    public function getExternalConsentId(): ?string
    {
        return $this->externalConsentId;
    }
    /**
     * Set externalConsentId value
     * @param string $externalConsentId
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
     */
    public function setExternalConsentId(?string $externalConsentId = null): self
    {
        // validation for constraint: string
        if (!is_null($externalConsentId) && !is_string($externalConsentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalConsentId, true), gettype($externalConsentId)), __LINE__);
        }
        $this->externalConsentId = $externalConsentId;
        
        return $this;
    }
    /**
     * Get mailingProhibited value
     * @return bool|null
     */
    public function getMailingProhibited(): ?bool
    {
        return $this->mailingProhibited;
    }
    /**
     * Set mailingProhibited value
     * @param bool $mailingProhibited
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
     */
    public function setMailingProhibited(?bool $mailingProhibited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mailingProhibited) && !is_bool($mailingProhibited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mailingProhibited, true), gettype($mailingProhibited)), __LINE__);
        }
        $this->mailingProhibited = $mailingProhibited;
        
        return $this;
    }
    /**
     * Get mailingStatus value
     * @return string|null
     */
    public function getMailingStatus(): ?string
    {
        return $this->mailingStatus;
    }
    /**
     * Set mailingStatus value
     * @param string $mailingStatus
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
     */
    public function setMailingStatus(?string $mailingStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($mailingStatus) && !is_string($mailingStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailingStatus, true), gettype($mailingStatus)), __LINE__);
        }
        $this->mailingStatus = $mailingStatus;
        
        return $this;
    }
    /**
     * Get mailingStatusModifyDate value
     * @return string|null
     */
    public function getMailingStatusModifyDate(): ?string
    {
        return $this->mailingStatusModifyDate;
    }
    /**
     * Set mailingStatusModifyDate value
     * @param string $mailingStatusModifyDate
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
     */
    public function setMailingStatusModifyDate(?string $mailingStatusModifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($mailingStatusModifyDate) && !is_string($mailingStatusModifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailingStatusModifyDate, true), gettype($mailingStatusModifyDate)), __LINE__);
        }
        $this->mailingStatusModifyDate = $mailingStatusModifyDate;
        
        return $this;
    }
    /**
     * Get mailingStatusModifyUser value
     * @return int|null
     */
    public function getMailingStatusModifyUser(): ?int
    {
        return $this->mailingStatusModifyUser;
    }
    /**
     * Set mailingStatusModifyUser value
     * @param int $mailingStatusModifyUser
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
     */
    public function setMailingStatusModifyUser(?int $mailingStatusModifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($mailingStatusModifyUser) && !(is_int($mailingStatusModifyUser) || ctype_digit($mailingStatusModifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mailingStatusModifyUser, true), gettype($mailingStatusModifyUser)), __LINE__);
        }
        $this->mailingStatusModifyUser = $mailingStatusModifyUser;
        
        return $this;
    }
    /**
     * Get modifyDate value
     * @return string|null
     */
    public function getModifyDate(): ?string
    {
        return $this->modifyDate;
    }
    /**
     * Set modifyDate value
     * @param string $modifyDate
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
     */
    public function setModifyDate(?string $modifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyDate, true), gettype($modifyDate)), __LINE__);
        }
        $this->modifyDate = $modifyDate;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
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
     * Get postOfficeBox value
     * @return string|null
     */
    public function getPostOfficeBox(): ?string
    {
        return $this->postOfficeBox;
    }
    /**
     * Set postOfficeBox value
     * @param string $postOfficeBox
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
     */
    public function setPostOfficeBox(?string $postOfficeBox = null): self
    {
        // validation for constraint: string
        if (!is_null($postOfficeBox) && !is_string($postOfficeBox)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postOfficeBox, true), gettype($postOfficeBox)), __LINE__);
        }
        $this->postOfficeBox = $postOfficeBox;
        
        return $this;
    }
    /**
     * Get postalCode value
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }
    /**
     * Set postalCode value
     * @param string $postalCode
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->postalCode = $postalCode;
        
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        
        return $this;
    }
    /**
     * Get stateId value
     * @return string|null
     */
    public function getStateId(): ?string
    {
        return $this->stateId;
    }
    /**
     * Set stateId value
     * @param string $stateId
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
     */
    public function setStateId(?string $stateId = null): self
    {
        // validation for constraint: string
        if (!is_null($stateId) && !is_string($stateId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stateId, true), gettype($stateId)), __LINE__);
        }
        $this->stateId = $stateId;
        
        return $this;
    }
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->street = $street;
        
        return $this;
    }
    /**
     * Get streetNo value
     * @return string|null
     */
    public function getStreetNo(): ?string
    {
        return $this->streetNo;
    }
    /**
     * Set streetNo value
     * @param string $streetNo
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
     */
    public function setStreetNo(?string $streetNo = null): self
    {
        // validation for constraint: string
        if (!is_null($streetNo) && !is_string($streetNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetNo, true), gettype($streetNo)), __LINE__);
        }
        $this->streetNo = $streetNo;
        
        return $this;
    }
    /**
     * Get validated value
     * @return bool|null
     */
    public function getValidated(): ?bool
    {
        return $this->validated;
    }
    /**
     * Set validated value
     * @param bool $validated
     * @return \Pggns\MidocoApi\Mis\StructType\CrmAddressDTO
     */
    public function setValidated(?bool $validated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($validated) && !is_bool($validated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($validated, true), gettype($validated)), __LINE__);
        }
        $this->validated = $validated;
        
        return $this;
    }
}
