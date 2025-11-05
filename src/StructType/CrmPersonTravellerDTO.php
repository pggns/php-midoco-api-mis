<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmPersonTravellerDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmPersonTravellerDTO extends AbstractStructBase
{
    /**
     * The birthDay
     * @var int|null
     */
    protected ?int $birthDay = null;
    /**
     * The birthMonth
     * @var int|null
     */
    protected ?int $birthMonth = null;
    /**
     * The birthName
     * @var string|null
     */
    protected ?string $birthName = null;
    /**
     * The birthYear
     * @var int|null
     */
    protected ?int $birthYear = null;
    /**
     * The birthday
     * @var string|null
     */
    protected ?string $birthday = null;
    /**
     * The birthdayNotProvided
     * @var bool|null
     */
    protected ?bool $birthdayNotProvided = null;
    /**
     * The contactName
     * @var string|null
     */
    protected ?string $contactName = null;
    /**
     * The contactPhone
     * @var string|null
     */
    protected ?string $contactPhone = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The disabilityDescription
     * @var string|null
     */
    protected ?string $disabilityDescription = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The expiryDate
     * @var string|null
     */
    protected ?string $expiryDate = null;
    /**
     * The facesId
     * @var string|null
     */
    protected ?string $facesId = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The gender
     * @var int|null
     */
    protected ?int $gender = null;
    /**
     * The genderNotProvided
     * @var bool|null
     */
    protected ?bool $genderNotProvided = null;
    /**
     * The hasDisability
     * @var bool|null
     */
    protected ?bool $hasDisability = null;
    /**
     * The idCardNo
     * @var string|null
     */
    protected ?string $idCardNo = null;
    /**
     * The idCardType
     * @var string|null
     */
    protected ?string $idCardType = null;
    /**
     * The issueDate
     * @var string|null
     */
    protected ?string $issueDate = null;
    /**
     * The issuePlace
     * @var string|null
     */
    protected ?string $issuePlace = null;
    /**
     * The mailingProhibited
     * @var bool|null
     */
    protected ?bool $mailingProhibited = null;
    /**
     * The maritalStatus
     * @var string|null
     */
    protected ?string $maritalStatus = null;
    /**
     * The middleName
     * @var string|null
     */
    protected ?string $middleName = null;
    /**
     * The middleNameNotAvailable
     * @var bool|null
     */
    protected ?bool $middleNameNotAvailable = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The nationality
     * @var string|null
     */
    protected ?string $nationality = null;
    /**
     * The needsBarrierFreeAccess
     * @var bool|null
     */
    protected ?bool $needsBarrierFreeAccess = null;
    /**
     * The passportExpiryDate
     * @var string|null
     */
    protected ?string $passportExpiryDate = null;
    /**
     * The passportIssueDate
     * @var string|null
     */
    protected ?string $passportIssueDate = null;
    /**
     * The passportIssuePlace
     * @var string|null
     */
    protected ?string $passportIssuePlace = null;
    /**
     * The passportNo
     * @var string|null
     */
    protected ?string $passportNo = null;
    /**
     * The phone
     * @var string|null
     */
    protected ?string $phone = null;
    /**
     * The placeOfBirth
     * @var string|null
     */
    protected ?string $placeOfBirth = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The salutationId
     * @var string|null
     */
    protected ?string $salutationId = null;
    /**
     * The title
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The travellerId
     * @var int|null
     */
    protected ?int $travellerId = null;
    /**
     * The travellerType
     * @var string|null
     */
    protected ?string $travellerType = null;
    /**
     * The typeId
     * @var int|null
     */
    protected ?int $typeId = null;
    /**
     * Constructor method for CrmPersonTravellerDTO
     * @uses CrmPersonTravellerDTO::setBirthDay()
     * @uses CrmPersonTravellerDTO::setBirthMonth()
     * @uses CrmPersonTravellerDTO::setBirthName()
     * @uses CrmPersonTravellerDTO::setBirthYear()
     * @uses CrmPersonTravellerDTO::setBirthday_1()
     * @uses CrmPersonTravellerDTO::setBirthdayNotProvided()
     * @uses CrmPersonTravellerDTO::setContactName()
     * @uses CrmPersonTravellerDTO::setContactPhone()
     * @uses CrmPersonTravellerDTO::setCustomerId()
     * @uses CrmPersonTravellerDTO::setDisabilityDescription()
     * @uses CrmPersonTravellerDTO::setEmail()
     * @uses CrmPersonTravellerDTO::setExpiryDate()
     * @uses CrmPersonTravellerDTO::setFacesId()
     * @uses CrmPersonTravellerDTO::setForename()
     * @uses CrmPersonTravellerDTO::setGender()
     * @uses CrmPersonTravellerDTO::setGenderNotProvided()
     * @uses CrmPersonTravellerDTO::setHasDisability()
     * @uses CrmPersonTravellerDTO::setIdCardNo()
     * @uses CrmPersonTravellerDTO::setIdCardType()
     * @uses CrmPersonTravellerDTO::setIssueDate()
     * @uses CrmPersonTravellerDTO::setIssuePlace()
     * @uses CrmPersonTravellerDTO::setMailingProhibited()
     * @uses CrmPersonTravellerDTO::setMaritalStatus()
     * @uses CrmPersonTravellerDTO::setMiddleName()
     * @uses CrmPersonTravellerDTO::setMiddleNameNotAvailable()
     * @uses CrmPersonTravellerDTO::setName()
     * @uses CrmPersonTravellerDTO::setNationality()
     * @uses CrmPersonTravellerDTO::setNeedsBarrierFreeAccess()
     * @uses CrmPersonTravellerDTO::setPassportExpiryDate()
     * @uses CrmPersonTravellerDTO::setPassportIssueDate()
     * @uses CrmPersonTravellerDTO::setPassportIssuePlace()
     * @uses CrmPersonTravellerDTO::setPassportNo()
     * @uses CrmPersonTravellerDTO::setPhone()
     * @uses CrmPersonTravellerDTO::setPlaceOfBirth()
     * @uses CrmPersonTravellerDTO::setPosition()
     * @uses CrmPersonTravellerDTO::setSalutationId()
     * @uses CrmPersonTravellerDTO::setTitle()
     * @uses CrmPersonTravellerDTO::setTravellerId()
     * @uses CrmPersonTravellerDTO::setTravellerType()
     * @uses CrmPersonTravellerDTO::setTypeId()
     * @param int $birthDay
     * @param int $birthMonth
     * @param string $birthName
     * @param int $birthYear
     * @param string $birthday
     * @param bool $birthdayNotProvided
     * @param string $contactName
     * @param string $contactPhone
     * @param int $customerId
     * @param string $disabilityDescription
     * @param string $email
     * @param string $expiryDate
     * @param string $facesId
     * @param string $forename
     * @param int $gender
     * @param bool $genderNotProvided
     * @param bool $hasDisability
     * @param string $idCardNo
     * @param string $idCardType
     * @param string $issueDate
     * @param string $issuePlace
     * @param bool $mailingProhibited
     * @param string $maritalStatus
     * @param string $middleName
     * @param bool $middleNameNotAvailable
     * @param string $name
     * @param string $nationality
     * @param bool $needsBarrierFreeAccess
     * @param string $passportExpiryDate
     * @param string $passportIssueDate
     * @param string $passportIssuePlace
     * @param string $passportNo
     * @param string $phone
     * @param string $placeOfBirth
     * @param int $position
     * @param string $salutationId
     * @param string $title
     * @param int $travellerId
     * @param string $travellerType
     * @param int $typeId
     */
    public function __construct(?int $birthDay = null, ?int $birthMonth = null, ?string $birthName = null, ?int $birthYear = null, ?string $birthday_1 = null, ?bool $birthdayNotProvided = null, ?string $contactName = null, ?string $contactPhone = null, ?int $customerId = null, ?string $disabilityDescription = null, ?string $email = null, ?string $expiryDate = null, ?string $facesId = null, ?string $forename = null, ?int $gender = null, ?bool $genderNotProvided = null, ?bool $hasDisability = null, ?string $idCardNo = null, ?string $idCardType = null, ?string $issueDate = null, ?string $issuePlace = null, ?bool $mailingProhibited = null, ?string $maritalStatus = null, ?string $middleName = null, ?bool $middleNameNotAvailable = null, ?string $name = null, ?string $nationality = null, ?bool $needsBarrierFreeAccess = null, ?string $passportExpiryDate = null, ?string $passportIssueDate = null, ?string $passportIssuePlace = null, ?string $passportNo = null, ?string $phone = null, ?string $placeOfBirth = null, ?int $position = null, ?string $salutationId = null, ?string $title = null, ?int $travellerId = null, ?string $travellerType = null, ?int $typeId = null)
    {
        $this
            ->setBirthDay($birthDay)
            ->setBirthMonth($birthMonth)
            ->setBirthName($birthName)
            ->setBirthYear($birthYear)
            ->setBirthday_1($birthday_1)
            ->setBirthdayNotProvided($birthdayNotProvided)
            ->setContactName($contactName)
            ->setContactPhone($contactPhone)
            ->setCustomerId($customerId)
            ->setDisabilityDescription($disabilityDescription)
            ->setEmail($email)
            ->setExpiryDate($expiryDate)
            ->setFacesId($facesId)
            ->setForename($forename)
            ->setGender($gender)
            ->setGenderNotProvided($genderNotProvided)
            ->setHasDisability($hasDisability)
            ->setIdCardNo($idCardNo)
            ->setIdCardType($idCardType)
            ->setIssueDate($issueDate)
            ->setIssuePlace($issuePlace)
            ->setMailingProhibited($mailingProhibited)
            ->setMaritalStatus($maritalStatus)
            ->setMiddleName($middleName)
            ->setMiddleNameNotAvailable($middleNameNotAvailable)
            ->setName($name)
            ->setNationality($nationality)
            ->setNeedsBarrierFreeAccess($needsBarrierFreeAccess)
            ->setPassportExpiryDate($passportExpiryDate)
            ->setPassportIssueDate($passportIssueDate)
            ->setPassportIssuePlace($passportIssuePlace)
            ->setPassportNo($passportNo)
            ->setPhone($phone)
            ->setPlaceOfBirth($placeOfBirth)
            ->setPosition($position)
            ->setSalutationId($salutationId)
            ->setTitle($title)
            ->setTravellerId($travellerId)
            ->setTravellerType($travellerType)
            ->setTypeId($typeId);
    }
    /**
     * Get birthDay value
     * @return int|null
     */
    public function getBirthDay(): ?int
    {
        return $this->birthDay;
    }
    /**
     * Set birthDay value
     * @param int $birthDay
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setBirthDay(?int $birthDay = null): self
    {
        // validation for constraint: int
        if (!is_null($birthDay) && !(is_int($birthDay) || ctype_digit($birthDay))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($birthDay, true), gettype($birthDay)), __LINE__);
        }
        $this->birthDay = $birthDay;
        
        return $this;
    }
    /**
     * Get birthMonth value
     * @return int|null
     */
    public function getBirthMonth(): ?int
    {
        return $this->birthMonth;
    }
    /**
     * Set birthMonth value
     * @param int $birthMonth
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setBirthMonth(?int $birthMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($birthMonth) && !(is_int($birthMonth) || ctype_digit($birthMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($birthMonth, true), gettype($birthMonth)), __LINE__);
        }
        $this->birthMonth = $birthMonth;
        
        return $this;
    }
    /**
     * Get birthName value
     * @return string|null
     */
    public function getBirthName(): ?string
    {
        return $this->birthName;
    }
    /**
     * Set birthName value
     * @param string $birthName
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setBirthName(?string $birthName = null): self
    {
        // validation for constraint: string
        if (!is_null($birthName) && !is_string($birthName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthName, true), gettype($birthName)), __LINE__);
        }
        $this->birthName = $birthName;
        
        return $this;
    }
    /**
     * Get birthYear value
     * @return int|null
     */
    public function getBirthYear(): ?int
    {
        return $this->birthYear;
    }
    /**
     * Set birthYear value
     * @param int $birthYear
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setBirthYear(?int $birthYear = null): self
    {
        // validation for constraint: int
        if (!is_null($birthYear) && !(is_int($birthYear) || ctype_digit($birthYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($birthYear, true), gettype($birthYear)), __LINE__);
        }
        $this->birthYear = $birthYear;
        
        return $this;
    }
    /**
     * Get birthday value
     * @return string|null
     */
    public function getBirthday_1(): ?string
    {
        return $this->birthday;
    }
    /**
     * Set birthday value
     * @param string $birthday
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setBirthday_1(?string $birthday_1 = null): self
    {
        // validation for constraint: string
        if (!is_null($birthday_1) && !is_string($birthday_1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthday_1, true), gettype($birthday_1)), __LINE__);
        }
        $this->birthday = $birthday_1;
        
        return $this;
    }
    /**
     * Get birthdayNotProvided value
     * @return bool|null
     */
    public function getBirthdayNotProvided(): ?bool
    {
        return $this->birthdayNotProvided;
    }
    /**
     * Set birthdayNotProvided value
     * @param bool $birthdayNotProvided
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setBirthdayNotProvided(?bool $birthdayNotProvided = null): self
    {
        // validation for constraint: boolean
        if (!is_null($birthdayNotProvided) && !is_bool($birthdayNotProvided)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($birthdayNotProvided, true), gettype($birthdayNotProvided)), __LINE__);
        }
        $this->birthdayNotProvided = $birthdayNotProvided;
        
        return $this;
    }
    /**
     * Get contactName value
     * @return string|null
     */
    public function getContactName(): ?string
    {
        return $this->contactName;
    }
    /**
     * Set contactName value
     * @param string $contactName
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setContactName(?string $contactName = null): self
    {
        // validation for constraint: string
        if (!is_null($contactName) && !is_string($contactName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactName, true), gettype($contactName)), __LINE__);
        }
        $this->contactName = $contactName;
        
        return $this;
    }
    /**
     * Get contactPhone value
     * @return string|null
     */
    public function getContactPhone(): ?string
    {
        return $this->contactPhone;
    }
    /**
     * Set contactPhone value
     * @param string $contactPhone
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setContactPhone(?string $contactPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($contactPhone) && !is_string($contactPhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactPhone, true), gettype($contactPhone)), __LINE__);
        }
        $this->contactPhone = $contactPhone;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
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
     * Get disabilityDescription value
     * @return string|null
     */
    public function getDisabilityDescription(): ?string
    {
        return $this->disabilityDescription;
    }
    /**
     * Set disabilityDescription value
     * @param string $disabilityDescription
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setDisabilityDescription(?string $disabilityDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($disabilityDescription) && !is_string($disabilityDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disabilityDescription, true), gettype($disabilityDescription)), __LINE__);
        }
        $this->disabilityDescription = $disabilityDescription;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get expiryDate value
     * @return string|null
     */
    public function getExpiryDate(): ?string
    {
        return $this->expiryDate;
    }
    /**
     * Set expiryDate value
     * @param string $expiryDate
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setExpiryDate(?string $expiryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expiryDate) && !is_string($expiryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiryDate, true), gettype($expiryDate)), __LINE__);
        }
        $this->expiryDate = $expiryDate;
        
        return $this;
    }
    /**
     * Get facesId value
     * @return string|null
     */
    public function getFacesId(): ?string
    {
        return $this->facesId;
    }
    /**
     * Set facesId value
     * @param string $facesId
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setFacesId(?string $facesId = null): self
    {
        // validation for constraint: string
        if (!is_null($facesId) && !is_string($facesId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($facesId, true), gettype($facesId)), __LINE__);
        }
        $this->facesId = $facesId;
        
        return $this;
    }
    /**
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
        return $this;
    }
    /**
     * Get gender value
     * @return int|null
     */
    public function getGender(): ?int
    {
        return $this->gender;
    }
    /**
     * Set gender value
     * @param int $gender
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setGender(?int $gender = null): self
    {
        // validation for constraint: int
        if (!is_null($gender) && !(is_int($gender) || ctype_digit($gender))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($gender, true), gettype($gender)), __LINE__);
        }
        $this->gender = $gender;
        
        return $this;
    }
    /**
     * Get genderNotProvided value
     * @return bool|null
     */
    public function getGenderNotProvided(): ?bool
    {
        return $this->genderNotProvided;
    }
    /**
     * Set genderNotProvided value
     * @param bool $genderNotProvided
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setGenderNotProvided(?bool $genderNotProvided = null): self
    {
        // validation for constraint: boolean
        if (!is_null($genderNotProvided) && !is_bool($genderNotProvided)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($genderNotProvided, true), gettype($genderNotProvided)), __LINE__);
        }
        $this->genderNotProvided = $genderNotProvided;
        
        return $this;
    }
    /**
     * Get hasDisability value
     * @return bool|null
     */
    public function getHasDisability(): ?bool
    {
        return $this->hasDisability;
    }
    /**
     * Set hasDisability value
     * @param bool $hasDisability
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setHasDisability(?bool $hasDisability = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasDisability) && !is_bool($hasDisability)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasDisability, true), gettype($hasDisability)), __LINE__);
        }
        $this->hasDisability = $hasDisability;
        
        return $this;
    }
    /**
     * Get idCardNo value
     * @return string|null
     */
    public function getIdCardNo(): ?string
    {
        return $this->idCardNo;
    }
    /**
     * Set idCardNo value
     * @param string $idCardNo
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setIdCardNo(?string $idCardNo = null): self
    {
        // validation for constraint: string
        if (!is_null($idCardNo) && !is_string($idCardNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idCardNo, true), gettype($idCardNo)), __LINE__);
        }
        $this->idCardNo = $idCardNo;
        
        return $this;
    }
    /**
     * Get idCardType value
     * @return string|null
     */
    public function getIdCardType(): ?string
    {
        return $this->idCardType;
    }
    /**
     * Set idCardType value
     * @param string $idCardType
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setIdCardType(?string $idCardType = null): self
    {
        // validation for constraint: string
        if (!is_null($idCardType) && !is_string($idCardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idCardType, true), gettype($idCardType)), __LINE__);
        }
        $this->idCardType = $idCardType;
        
        return $this;
    }
    /**
     * Get issueDate value
     * @return string|null
     */
    public function getIssueDate(): ?string
    {
        return $this->issueDate;
    }
    /**
     * Set issueDate value
     * @param string $issueDate
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setIssueDate(?string $issueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($issueDate) && !is_string($issueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueDate, true), gettype($issueDate)), __LINE__);
        }
        $this->issueDate = $issueDate;
        
        return $this;
    }
    /**
     * Get issuePlace value
     * @return string|null
     */
    public function getIssuePlace(): ?string
    {
        return $this->issuePlace;
    }
    /**
     * Set issuePlace value
     * @param string $issuePlace
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setIssuePlace(?string $issuePlace = null): self
    {
        // validation for constraint: string
        if (!is_null($issuePlace) && !is_string($issuePlace)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issuePlace, true), gettype($issuePlace)), __LINE__);
        }
        $this->issuePlace = $issuePlace;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
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
     * Get maritalStatus value
     * @return string|null
     */
    public function getMaritalStatus(): ?string
    {
        return $this->maritalStatus;
    }
    /**
     * Set maritalStatus value
     * @param string $maritalStatus
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setMaritalStatus(?string $maritalStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($maritalStatus) && !is_string($maritalStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maritalStatus, true), gettype($maritalStatus)), __LINE__);
        }
        $this->maritalStatus = $maritalStatus;
        
        return $this;
    }
    /**
     * Get middleName value
     * @return string|null
     */
    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }
    /**
     * Set middleName value
     * @param string $middleName
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setMiddleName(?string $middleName = null): self
    {
        // validation for constraint: string
        if (!is_null($middleName) && !is_string($middleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($middleName, true), gettype($middleName)), __LINE__);
        }
        $this->middleName = $middleName;
        
        return $this;
    }
    /**
     * Get middleNameNotAvailable value
     * @return bool|null
     */
    public function getMiddleNameNotAvailable(): ?bool
    {
        return $this->middleNameNotAvailable;
    }
    /**
     * Set middleNameNotAvailable value
     * @param bool $middleNameNotAvailable
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setMiddleNameNotAvailable(?bool $middleNameNotAvailable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($middleNameNotAvailable) && !is_bool($middleNameNotAvailable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($middleNameNotAvailable, true), gettype($middleNameNotAvailable)), __LINE__);
        }
        $this->middleNameNotAvailable = $middleNameNotAvailable;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
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
     * Get nationality value
     * @return string|null
     */
    public function getNationality(): ?string
    {
        return $this->nationality;
    }
    /**
     * Set nationality value
     * @param string $nationality
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setNationality(?string $nationality = null): self
    {
        // validation for constraint: string
        if (!is_null($nationality) && !is_string($nationality)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nationality, true), gettype($nationality)), __LINE__);
        }
        $this->nationality = $nationality;
        
        return $this;
    }
    /**
     * Get needsBarrierFreeAccess value
     * @return bool|null
     */
    public function getNeedsBarrierFreeAccess(): ?bool
    {
        return $this->needsBarrierFreeAccess;
    }
    /**
     * Set needsBarrierFreeAccess value
     * @param bool $needsBarrierFreeAccess
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setNeedsBarrierFreeAccess(?bool $needsBarrierFreeAccess = null): self
    {
        // validation for constraint: boolean
        if (!is_null($needsBarrierFreeAccess) && !is_bool($needsBarrierFreeAccess)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($needsBarrierFreeAccess, true), gettype($needsBarrierFreeAccess)), __LINE__);
        }
        $this->needsBarrierFreeAccess = $needsBarrierFreeAccess;
        
        return $this;
    }
    /**
     * Get passportExpiryDate value
     * @return string|null
     */
    public function getPassportExpiryDate(): ?string
    {
        return $this->passportExpiryDate;
    }
    /**
     * Set passportExpiryDate value
     * @param string $passportExpiryDate
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setPassportExpiryDate(?string $passportExpiryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($passportExpiryDate) && !is_string($passportExpiryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passportExpiryDate, true), gettype($passportExpiryDate)), __LINE__);
        }
        $this->passportExpiryDate = $passportExpiryDate;
        
        return $this;
    }
    /**
     * Get passportIssueDate value
     * @return string|null
     */
    public function getPassportIssueDate(): ?string
    {
        return $this->passportIssueDate;
    }
    /**
     * Set passportIssueDate value
     * @param string $passportIssueDate
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setPassportIssueDate(?string $passportIssueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($passportIssueDate) && !is_string($passportIssueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passportIssueDate, true), gettype($passportIssueDate)), __LINE__);
        }
        $this->passportIssueDate = $passportIssueDate;
        
        return $this;
    }
    /**
     * Get passportIssuePlace value
     * @return string|null
     */
    public function getPassportIssuePlace(): ?string
    {
        return $this->passportIssuePlace;
    }
    /**
     * Set passportIssuePlace value
     * @param string $passportIssuePlace
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setPassportIssuePlace(?string $passportIssuePlace = null): self
    {
        // validation for constraint: string
        if (!is_null($passportIssuePlace) && !is_string($passportIssuePlace)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passportIssuePlace, true), gettype($passportIssuePlace)), __LINE__);
        }
        $this->passportIssuePlace = $passportIssuePlace;
        
        return $this;
    }
    /**
     * Get passportNo value
     * @return string|null
     */
    public function getPassportNo(): ?string
    {
        return $this->passportNo;
    }
    /**
     * Set passportNo value
     * @param string $passportNo
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setPassportNo(?string $passportNo = null): self
    {
        // validation for constraint: string
        if (!is_null($passportNo) && !is_string($passportNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passportNo, true), gettype($passportNo)), __LINE__);
        }
        $this->passportNo = $passportNo;
        
        return $this;
    }
    /**
     * Get phone value
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    /**
     * Set phone value
     * @param string $phone
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setPhone(?string $phone = null): self
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        $this->phone = $phone;
        
        return $this;
    }
    /**
     * Get placeOfBirth value
     * @return string|null
     */
    public function getPlaceOfBirth(): ?string
    {
        return $this->placeOfBirth;
    }
    /**
     * Set placeOfBirth value
     * @param string $placeOfBirth
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setPlaceOfBirth(?string $placeOfBirth = null): self
    {
        // validation for constraint: string
        if (!is_null($placeOfBirth) && !is_string($placeOfBirth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($placeOfBirth, true), gettype($placeOfBirth)), __LINE__);
        }
        $this->placeOfBirth = $placeOfBirth;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
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
    /**
     * Get salutationId value
     * @return string|null
     */
    public function getSalutationId(): ?string
    {
        return $this->salutationId;
    }
    /**
     * Set salutationId value
     * @param string $salutationId
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setSalutationId(?string $salutationId = null): self
    {
        // validation for constraint: string
        if (!is_null($salutationId) && !is_string($salutationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salutationId, true), gettype($salutationId)), __LINE__);
        }
        $this->salutationId = $salutationId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
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
     * Get travellerId value
     * @return int|null
     */
    public function getTravellerId(): ?int
    {
        return $this->travellerId;
    }
    /**
     * Set travellerId value
     * @param int $travellerId
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setTravellerId(?int $travellerId = null): self
    {
        // validation for constraint: int
        if (!is_null($travellerId) && !(is_int($travellerId) || ctype_digit($travellerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travellerId, true), gettype($travellerId)), __LINE__);
        }
        $this->travellerId = $travellerId;
        
        return $this;
    }
    /**
     * Get travellerType value
     * @return string|null
     */
    public function getTravellerType(): ?string
    {
        return $this->travellerType;
    }
    /**
     * Set travellerType value
     * @param string $travellerType
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setTravellerType(?string $travellerType = null): self
    {
        // validation for constraint: string
        if (!is_null($travellerType) && !is_string($travellerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travellerType, true), gettype($travellerType)), __LINE__);
        }
        $this->travellerType = $travellerType;
        
        return $this;
    }
    /**
     * Get typeId value
     * @return int|null
     */
    public function getTypeId(): ?int
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param int $typeId
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonTravellerDTO
     */
    public function setTypeId(?int $typeId = null): self
    {
        // validation for constraint: int
        if (!is_null($typeId) && !(is_int($typeId) || ctype_digit($typeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
}
