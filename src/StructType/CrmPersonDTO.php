<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmPersonDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmPersonDTO extends AbstractStructBase
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
     * The constCentre
     * @var string|null
     */
    protected ?string $constCentre = null;
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
     * The crisisContactName
     * @var string|null
     */
    protected ?string $crisisContactName = null;
    /**
     * The crisisPhoneNo
     * @var string|null
     */
    protected ?string $crisisPhoneNo = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The department
     * @var string|null
     */
    protected ?string $department = null;
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
     * The idCardExpiryDate
     * @var string|null
     */
    protected ?string $idCardExpiryDate = null;
    /**
     * The idCardIssueDate
     * @var string|null
     */
    protected ?string $idCardIssueDate = null;
    /**
     * The idCardIssuePlace
     * @var string|null
     */
    protected ?string $idCardIssuePlace = null;
    /**
     * The identificationCardNo
     * @var string|null
     */
    protected ?string $identificationCardNo = null;
    /**
     * The isSpecialCustomer
     * @var bool|null
     */
    protected ?bool $isSpecialCustomer = null;
    /**
     * The jobFunction
     * @var string|null
     */
    protected ?string $jobFunction = null;
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
     * The personalNo
     * @var string|null
     */
    protected ?string $personalNo = null;
    /**
     * The placeOfBirth
     * @var string|null
     */
    protected ?string $placeOfBirth = null;
    /**
     * The title
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * Constructor method for CrmPersonDTO
     * @uses CrmPersonDTO::setBirthDay()
     * @uses CrmPersonDTO::setBirthMonth()
     * @uses CrmPersonDTO::setBirthName()
     * @uses CrmPersonDTO::setBirthYear()
     * @uses CrmPersonDTO::setBirthday_1()
     * @uses CrmPersonDTO::setBirthdayNotProvided()
     * @uses CrmPersonDTO::setConstCentre()
     * @uses CrmPersonDTO::setContactName()
     * @uses CrmPersonDTO::setContactPhone()
     * @uses CrmPersonDTO::setCrisisContactName()
     * @uses CrmPersonDTO::setCrisisPhoneNo()
     * @uses CrmPersonDTO::setCustomerId()
     * @uses CrmPersonDTO::setDepartment()
     * @uses CrmPersonDTO::setForename()
     * @uses CrmPersonDTO::setGender()
     * @uses CrmPersonDTO::setGenderNotProvided()
     * @uses CrmPersonDTO::setHasDisability()
     * @uses CrmPersonDTO::setIdCardExpiryDate()
     * @uses CrmPersonDTO::setIdCardIssueDate()
     * @uses CrmPersonDTO::setIdCardIssuePlace()
     * @uses CrmPersonDTO::setIdentificationCardNo()
     * @uses CrmPersonDTO::setIsSpecialCustomer()
     * @uses CrmPersonDTO::setJobFunction()
     * @uses CrmPersonDTO::setMaritalStatus()
     * @uses CrmPersonDTO::setMiddleName()
     * @uses CrmPersonDTO::setMiddleNameNotAvailable()
     * @uses CrmPersonDTO::setName()
     * @uses CrmPersonDTO::setNationality()
     * @uses CrmPersonDTO::setPassportExpiryDate()
     * @uses CrmPersonDTO::setPassportIssueDate()
     * @uses CrmPersonDTO::setPassportIssuePlace()
     * @uses CrmPersonDTO::setPassportNo()
     * @uses CrmPersonDTO::setPersonalNo()
     * @uses CrmPersonDTO::setPlaceOfBirth()
     * @uses CrmPersonDTO::setTitle()
     * @param int $birthDay
     * @param int $birthMonth
     * @param string $birthName
     * @param int $birthYear
     * @param string $birthday
     * @param bool $birthdayNotProvided
     * @param string $constCentre
     * @param string $contactName
     * @param string $contactPhone
     * @param string $crisisContactName
     * @param string $crisisPhoneNo
     * @param int $customerId
     * @param string $department
     * @param string $forename
     * @param int $gender
     * @param bool $genderNotProvided
     * @param bool $hasDisability
     * @param string $idCardExpiryDate
     * @param string $idCardIssueDate
     * @param string $idCardIssuePlace
     * @param string $identificationCardNo
     * @param bool $isSpecialCustomer
     * @param string $jobFunction
     * @param string $maritalStatus
     * @param string $middleName
     * @param bool $middleNameNotAvailable
     * @param string $name
     * @param string $nationality
     * @param string $passportExpiryDate
     * @param string $passportIssueDate
     * @param string $passportIssuePlace
     * @param string $passportNo
     * @param string $personalNo
     * @param string $placeOfBirth
     * @param string $title
     */
    public function __construct(?int $birthDay = null, ?int $birthMonth = null, ?string $birthName = null, ?int $birthYear = null, ?string $birthday_1 = null, ?bool $birthdayNotProvided = null, ?string $constCentre = null, ?string $contactName = null, ?string $contactPhone = null, ?string $crisisContactName = null, ?string $crisisPhoneNo = null, ?int $customerId = null, ?string $department = null, ?string $forename = null, ?int $gender = null, ?bool $genderNotProvided = null, ?bool $hasDisability = null, ?string $idCardExpiryDate = null, ?string $idCardIssueDate = null, ?string $idCardIssuePlace = null, ?string $identificationCardNo = null, ?bool $isSpecialCustomer = null, ?string $jobFunction = null, ?string $maritalStatus = null, ?string $middleName = null, ?bool $middleNameNotAvailable = null, ?string $name = null, ?string $nationality = null, ?string $passportExpiryDate = null, ?string $passportIssueDate = null, ?string $passportIssuePlace = null, ?string $passportNo = null, ?string $personalNo = null, ?string $placeOfBirth = null, ?string $title = null)
    {
        $this
            ->setBirthDay($birthDay)
            ->setBirthMonth($birthMonth)
            ->setBirthName($birthName)
            ->setBirthYear($birthYear)
            ->setBirthday_1($birthday_1)
            ->setBirthdayNotProvided($birthdayNotProvided)
            ->setConstCentre($constCentre)
            ->setContactName($contactName)
            ->setContactPhone($contactPhone)
            ->setCrisisContactName($crisisContactName)
            ->setCrisisPhoneNo($crisisPhoneNo)
            ->setCustomerId($customerId)
            ->setDepartment($department)
            ->setForename($forename)
            ->setGender($gender)
            ->setGenderNotProvided($genderNotProvided)
            ->setHasDisability($hasDisability)
            ->setIdCardExpiryDate($idCardExpiryDate)
            ->setIdCardIssueDate($idCardIssueDate)
            ->setIdCardIssuePlace($idCardIssuePlace)
            ->setIdentificationCardNo($identificationCardNo)
            ->setIsSpecialCustomer($isSpecialCustomer)
            ->setJobFunction($jobFunction)
            ->setMaritalStatus($maritalStatus)
            ->setMiddleName($middleName)
            ->setMiddleNameNotAvailable($middleNameNotAvailable)
            ->setName($name)
            ->setNationality($nationality)
            ->setPassportExpiryDate($passportExpiryDate)
            ->setPassportIssueDate($passportIssueDate)
            ->setPassportIssuePlace($passportIssuePlace)
            ->setPassportNo($passportNo)
            ->setPersonalNo($personalNo)
            ->setPlaceOfBirth($placeOfBirth)
            ->setTitle($title);
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * Get constCentre value
     * @return string|null
     */
    public function getConstCentre(): ?string
    {
        return $this->constCentre;
    }
    /**
     * Set constCentre value
     * @param string $constCentre
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
     */
    public function setConstCentre(?string $constCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($constCentre) && !is_string($constCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($constCentre, true), gettype($constCentre)), __LINE__);
        }
        $this->constCentre = $constCentre;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * Get crisisContactName value
     * @return string|null
     */
    public function getCrisisContactName(): ?string
    {
        return $this->crisisContactName;
    }
    /**
     * Set crisisContactName value
     * @param string $crisisContactName
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
     */
    public function setCrisisContactName(?string $crisisContactName = null): self
    {
        // validation for constraint: string
        if (!is_null($crisisContactName) && !is_string($crisisContactName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crisisContactName, true), gettype($crisisContactName)), __LINE__);
        }
        $this->crisisContactName = $crisisContactName;
        
        return $this;
    }
    /**
     * Get crisisPhoneNo value
     * @return string|null
     */
    public function getCrisisPhoneNo(): ?string
    {
        return $this->crisisPhoneNo;
    }
    /**
     * Set crisisPhoneNo value
     * @param string $crisisPhoneNo
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
     */
    public function setCrisisPhoneNo(?string $crisisPhoneNo = null): self
    {
        // validation for constraint: string
        if (!is_null($crisisPhoneNo) && !is_string($crisisPhoneNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crisisPhoneNo, true), gettype($crisisPhoneNo)), __LINE__);
        }
        $this->crisisPhoneNo = $crisisPhoneNo;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * Get department value
     * @return string|null
     */
    public function getDepartment(): ?string
    {
        return $this->department;
    }
    /**
     * Set department value
     * @param string $department
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
     */
    public function setDepartment(?string $department = null): self
    {
        // validation for constraint: string
        if (!is_null($department) && !is_string($department)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($department, true), gettype($department)), __LINE__);
        }
        $this->department = $department;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * Get idCardExpiryDate value
     * @return string|null
     */
    public function getIdCardExpiryDate(): ?string
    {
        return $this->idCardExpiryDate;
    }
    /**
     * Set idCardExpiryDate value
     * @param string $idCardExpiryDate
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
     */
    public function setIdCardExpiryDate(?string $idCardExpiryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($idCardExpiryDate) && !is_string($idCardExpiryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idCardExpiryDate, true), gettype($idCardExpiryDate)), __LINE__);
        }
        $this->idCardExpiryDate = $idCardExpiryDate;
        
        return $this;
    }
    /**
     * Get idCardIssueDate value
     * @return string|null
     */
    public function getIdCardIssueDate(): ?string
    {
        return $this->idCardIssueDate;
    }
    /**
     * Set idCardIssueDate value
     * @param string $idCardIssueDate
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
     */
    public function setIdCardIssueDate(?string $idCardIssueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($idCardIssueDate) && !is_string($idCardIssueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idCardIssueDate, true), gettype($idCardIssueDate)), __LINE__);
        }
        $this->idCardIssueDate = $idCardIssueDate;
        
        return $this;
    }
    /**
     * Get idCardIssuePlace value
     * @return string|null
     */
    public function getIdCardIssuePlace(): ?string
    {
        return $this->idCardIssuePlace;
    }
    /**
     * Set idCardIssuePlace value
     * @param string $idCardIssuePlace
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
     */
    public function setIdCardIssuePlace(?string $idCardIssuePlace = null): self
    {
        // validation for constraint: string
        if (!is_null($idCardIssuePlace) && !is_string($idCardIssuePlace)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idCardIssuePlace, true), gettype($idCardIssuePlace)), __LINE__);
        }
        $this->idCardIssuePlace = $idCardIssuePlace;
        
        return $this;
    }
    /**
     * Get identificationCardNo value
     * @return string|null
     */
    public function getIdentificationCardNo(): ?string
    {
        return $this->identificationCardNo;
    }
    /**
     * Set identificationCardNo value
     * @param string $identificationCardNo
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
     */
    public function setIdentificationCardNo(?string $identificationCardNo = null): self
    {
        // validation for constraint: string
        if (!is_null($identificationCardNo) && !is_string($identificationCardNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identificationCardNo, true), gettype($identificationCardNo)), __LINE__);
        }
        $this->identificationCardNo = $identificationCardNo;
        
        return $this;
    }
    /**
     * Get isSpecialCustomer value
     * @return bool|null
     */
    public function getIsSpecialCustomer(): ?bool
    {
        return $this->isSpecialCustomer;
    }
    /**
     * Set isSpecialCustomer value
     * @param bool $isSpecialCustomer
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
     */
    public function setIsSpecialCustomer(?bool $isSpecialCustomer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSpecialCustomer) && !is_bool($isSpecialCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSpecialCustomer, true), gettype($isSpecialCustomer)), __LINE__);
        }
        $this->isSpecialCustomer = $isSpecialCustomer;
        
        return $this;
    }
    /**
     * Get jobFunction value
     * @return string|null
     */
    public function getJobFunction(): ?string
    {
        return $this->jobFunction;
    }
    /**
     * Set jobFunction value
     * @param string $jobFunction
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
     */
    public function setJobFunction(?string $jobFunction = null): self
    {
        // validation for constraint: string
        if (!is_null($jobFunction) && !is_string($jobFunction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($jobFunction, true), gettype($jobFunction)), __LINE__);
        }
        $this->jobFunction = $jobFunction;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * Get personalNo value
     * @return string|null
     */
    public function getPersonalNo(): ?string
    {
        return $this->personalNo;
    }
    /**
     * Set personalNo value
     * @param string $personalNo
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
     */
    public function setPersonalNo(?string $personalNo = null): self
    {
        // validation for constraint: string
        if (!is_null($personalNo) && !is_string($personalNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personalNo, true), gettype($personalNo)), __LINE__);
        }
        $this->personalNo = $personalNo;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmPersonDTO
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
