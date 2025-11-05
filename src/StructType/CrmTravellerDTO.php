<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmTravellerDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmTravellerDTO extends AbstractStructBase
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
     * The businessPhone
     * @var string|null
     */
    protected ?string $businessPhone = null;
    /**
     * The ccNo
     * @var string|null
     */
    protected ?string $ccNo = null;
    /**
     * The ccOwner
     * @var string|null
     */
    protected ?string $ccOwner = null;
    /**
     * The ccTyp
     * @var string|null
     */
    protected ?string $ccTyp = null;
    /**
     * The ccValidMonth
     * @var int|null
     */
    protected ?int $ccValidMonth = null;
    /**
     * The ccValidYear
     * @var int|null
     */
    protected ?int $ccValidYear = null;
    /**
     * The customerCostCentre
     * @var string|null
     */
    protected ?string $customerCostCentre = null;
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
     * The middlename
     * @var string|null
     */
    protected ?string $middlename = null;
    /**
     * The mobilePhone
     * @var string|null
     */
    protected ?string $mobilePhone = null;
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
     * The privatePhone
     * @var string|null
     */
    protected ?string $privatePhone = null;
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
     * The typeId
     * @var int|null
     */
    protected ?int $typeId = null;
    /**
     * Constructor method for CrmTravellerDTO
     * @uses CrmTravellerDTO::setBirthDay()
     * @uses CrmTravellerDTO::setBirthMonth()
     * @uses CrmTravellerDTO::setBirthName()
     * @uses CrmTravellerDTO::setBirthYear()
     * @uses CrmTravellerDTO::setBirthday_1()
     * @uses CrmTravellerDTO::setBirthdayNotProvided()
     * @uses CrmTravellerDTO::setBusinessPhone()
     * @uses CrmTravellerDTO::setCcNo()
     * @uses CrmTravellerDTO::setCcOwner()
     * @uses CrmTravellerDTO::setCcTyp()
     * @uses CrmTravellerDTO::setCcValidMonth()
     * @uses CrmTravellerDTO::setCcValidYear()
     * @uses CrmTravellerDTO::setCustomerCostCentre()
     * @uses CrmTravellerDTO::setCustomerId()
     * @uses CrmTravellerDTO::setDepartment()
     * @uses CrmTravellerDTO::setEmail()
     * @uses CrmTravellerDTO::setExpiryDate()
     * @uses CrmTravellerDTO::setFacesId()
     * @uses CrmTravellerDTO::setForename()
     * @uses CrmTravellerDTO::setGender()
     * @uses CrmTravellerDTO::setGenderNotProvided()
     * @uses CrmTravellerDTO::setIdCardNo()
     * @uses CrmTravellerDTO::setIdCardType()
     * @uses CrmTravellerDTO::setIssueDate()
     * @uses CrmTravellerDTO::setIssuePlace()
     * @uses CrmTravellerDTO::setMiddlename()
     * @uses CrmTravellerDTO::setMobilePhone()
     * @uses CrmTravellerDTO::setName()
     * @uses CrmTravellerDTO::setNationality()
     * @uses CrmTravellerDTO::setPassportExpiryDate()
     * @uses CrmTravellerDTO::setPassportIssueDate()
     * @uses CrmTravellerDTO::setPassportIssuePlace()
     * @uses CrmTravellerDTO::setPassportNo()
     * @uses CrmTravellerDTO::setPersonalNo()
     * @uses CrmTravellerDTO::setPlaceOfBirth()
     * @uses CrmTravellerDTO::setPrivatePhone()
     * @uses CrmTravellerDTO::setSalutationId()
     * @uses CrmTravellerDTO::setTitle()
     * @uses CrmTravellerDTO::setTravellerId()
     * @uses CrmTravellerDTO::setTypeId()
     * @param int $birthDay
     * @param int $birthMonth
     * @param string $birthName
     * @param int $birthYear
     * @param string $birthday
     * @param bool $birthdayNotProvided
     * @param string $businessPhone
     * @param string $ccNo
     * @param string $ccOwner
     * @param string $ccTyp
     * @param int $ccValidMonth
     * @param int $ccValidYear
     * @param string $customerCostCentre
     * @param int $customerId
     * @param string $department
     * @param string $email
     * @param string $expiryDate
     * @param string $facesId
     * @param string $forename
     * @param int $gender
     * @param bool $genderNotProvided
     * @param string $idCardNo
     * @param string $idCardType
     * @param string $issueDate
     * @param string $issuePlace
     * @param string $middlename
     * @param string $mobilePhone
     * @param string $name
     * @param string $nationality
     * @param string $passportExpiryDate
     * @param string $passportIssueDate
     * @param string $passportIssuePlace
     * @param string $passportNo
     * @param string $personalNo
     * @param string $placeOfBirth
     * @param string $privatePhone
     * @param string $salutationId
     * @param string $title
     * @param int $travellerId
     * @param int $typeId
     */
    public function __construct(?int $birthDay = null, ?int $birthMonth = null, ?string $birthName = null, ?int $birthYear = null, ?string $birthday_1 = null, ?bool $birthdayNotProvided = null, ?string $businessPhone = null, ?string $ccNo = null, ?string $ccOwner = null, ?string $ccTyp = null, ?int $ccValidMonth = null, ?int $ccValidYear = null, ?string $customerCostCentre = null, ?int $customerId = null, ?string $department = null, ?string $email = null, ?string $expiryDate = null, ?string $facesId = null, ?string $forename = null, ?int $gender = null, ?bool $genderNotProvided = null, ?string $idCardNo = null, ?string $idCardType = null, ?string $issueDate = null, ?string $issuePlace = null, ?string $middlename = null, ?string $mobilePhone = null, ?string $name = null, ?string $nationality = null, ?string $passportExpiryDate = null, ?string $passportIssueDate = null, ?string $passportIssuePlace = null, ?string $passportNo = null, ?string $personalNo = null, ?string $placeOfBirth = null, ?string $privatePhone = null, ?string $salutationId = null, ?string $title = null, ?int $travellerId = null, ?int $typeId = null)
    {
        $this
            ->setBirthDay($birthDay)
            ->setBirthMonth($birthMonth)
            ->setBirthName($birthName)
            ->setBirthYear($birthYear)
            ->setBirthday_1($birthday_1)
            ->setBirthdayNotProvided($birthdayNotProvided)
            ->setBusinessPhone($businessPhone)
            ->setCcNo($ccNo)
            ->setCcOwner($ccOwner)
            ->setCcTyp($ccTyp)
            ->setCcValidMonth($ccValidMonth)
            ->setCcValidYear($ccValidYear)
            ->setCustomerCostCentre($customerCostCentre)
            ->setCustomerId($customerId)
            ->setDepartment($department)
            ->setEmail($email)
            ->setExpiryDate($expiryDate)
            ->setFacesId($facesId)
            ->setForename($forename)
            ->setGender($gender)
            ->setGenderNotProvided($genderNotProvided)
            ->setIdCardNo($idCardNo)
            ->setIdCardType($idCardType)
            ->setIssueDate($issueDate)
            ->setIssuePlace($issuePlace)
            ->setMiddlename($middlename)
            ->setMobilePhone($mobilePhone)
            ->setName($name)
            ->setNationality($nationality)
            ->setPassportExpiryDate($passportExpiryDate)
            ->setPassportIssueDate($passportIssueDate)
            ->setPassportIssuePlace($passportIssuePlace)
            ->setPassportNo($passportNo)
            ->setPersonalNo($personalNo)
            ->setPlaceOfBirth($placeOfBirth)
            ->setPrivatePhone($privatePhone)
            ->setSalutationId($salutationId)
            ->setTitle($title)
            ->setTravellerId($travellerId)
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * Get businessPhone value
     * @return string|null
     */
    public function getBusinessPhone(): ?string
    {
        return $this->businessPhone;
    }
    /**
     * Set businessPhone value
     * @param string $businessPhone
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
     */
    public function setBusinessPhone(?string $businessPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($businessPhone) && !is_string($businessPhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($businessPhone, true), gettype($businessPhone)), __LINE__);
        }
        $this->businessPhone = $businessPhone;
        
        return $this;
    }
    /**
     * Get ccNo value
     * @return string|null
     */
    public function getCcNo(): ?string
    {
        return $this->ccNo;
    }
    /**
     * Set ccNo value
     * @param string $ccNo
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
     */
    public function setCcNo(?string $ccNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNo) && !is_string($ccNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNo, true), gettype($ccNo)), __LINE__);
        }
        $this->ccNo = $ccNo;
        
        return $this;
    }
    /**
     * Get ccOwner value
     * @return string|null
     */
    public function getCcOwner(): ?string
    {
        return $this->ccOwner;
    }
    /**
     * Set ccOwner value
     * @param string $ccOwner
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
     */
    public function setCcOwner(?string $ccOwner = null): self
    {
        // validation for constraint: string
        if (!is_null($ccOwner) && !is_string($ccOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccOwner, true), gettype($ccOwner)), __LINE__);
        }
        $this->ccOwner = $ccOwner;
        
        return $this;
    }
    /**
     * Get ccTyp value
     * @return string|null
     */
    public function getCcTyp(): ?string
    {
        return $this->ccTyp;
    }
    /**
     * Set ccTyp value
     * @param string $ccTyp
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
     */
    public function setCcTyp(?string $ccTyp = null): self
    {
        // validation for constraint: string
        if (!is_null($ccTyp) && !is_string($ccTyp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccTyp, true), gettype($ccTyp)), __LINE__);
        }
        $this->ccTyp = $ccTyp;
        
        return $this;
    }
    /**
     * Get ccValidMonth value
     * @return int|null
     */
    public function getCcValidMonth(): ?int
    {
        return $this->ccValidMonth;
    }
    /**
     * Set ccValidMonth value
     * @param int $ccValidMonth
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
     */
    public function setCcValidMonth(?int $ccValidMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($ccValidMonth) && !(is_int($ccValidMonth) || ctype_digit($ccValidMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccValidMonth, true), gettype($ccValidMonth)), __LINE__);
        }
        $this->ccValidMonth = $ccValidMonth;
        
        return $this;
    }
    /**
     * Get ccValidYear value
     * @return int|null
     */
    public function getCcValidYear(): ?int
    {
        return $this->ccValidYear;
    }
    /**
     * Set ccValidYear value
     * @param int $ccValidYear
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
     */
    public function setCcValidYear(?int $ccValidYear = null): self
    {
        // validation for constraint: int
        if (!is_null($ccValidYear) && !(is_int($ccValidYear) || ctype_digit($ccValidYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccValidYear, true), gettype($ccValidYear)), __LINE__);
        }
        $this->ccValidYear = $ccValidYear;
        
        return $this;
    }
    /**
     * Get customerCostCentre value
     * @return string|null
     */
    public function getCustomerCostCentre(): ?string
    {
        return $this->customerCostCentre;
    }
    /**
     * Set customerCostCentre value
     * @param string $customerCostCentre
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
     */
    public function setCustomerCostCentre(?string $customerCostCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($customerCostCentre) && !is_string($customerCostCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCostCentre, true), gettype($customerCostCentre)), __LINE__);
        }
        $this->customerCostCentre = $customerCostCentre;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * Get middlename value
     * @return string|null
     */
    public function getMiddlename(): ?string
    {
        return $this->middlename;
    }
    /**
     * Set middlename value
     * @param string $middlename
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
     */
    public function setMiddlename(?string $middlename = null): self
    {
        // validation for constraint: string
        if (!is_null($middlename) && !is_string($middlename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($middlename, true), gettype($middlename)), __LINE__);
        }
        $this->middlename = $middlename;
        
        return $this;
    }
    /**
     * Get mobilePhone value
     * @return string|null
     */
    public function getMobilePhone(): ?string
    {
        return $this->mobilePhone;
    }
    /**
     * Set mobilePhone value
     * @param string $mobilePhone
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
     */
    public function setMobilePhone(?string $mobilePhone = null): self
    {
        // validation for constraint: string
        if (!is_null($mobilePhone) && !is_string($mobilePhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobilePhone, true), gettype($mobilePhone)), __LINE__);
        }
        $this->mobilePhone = $mobilePhone;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * Get privatePhone value
     * @return string|null
     */
    public function getPrivatePhone(): ?string
    {
        return $this->privatePhone;
    }
    /**
     * Set privatePhone value
     * @param string $privatePhone
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
     */
    public function setPrivatePhone(?string $privatePhone = null): self
    {
        // validation for constraint: string
        if (!is_null($privatePhone) && !is_string($privatePhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($privatePhone, true), gettype($privatePhone)), __LINE__);
        }
        $this->privatePhone = $privatePhone;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTravellerDTO
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
