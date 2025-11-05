<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentTokenDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaymentTokenDTO extends AbstractStructBase
{
    /**
     * The agencyEmail
     * @var string|null
     */
    protected ?string $agencyEmail = null;
    /**
     * The bookingReference
     * @var string|null
     */
    protected ?string $bookingReference = null;
    /**
     * The ccFeeAmount
     * @var float|null
     */
    protected ?float $ccFeeAmount = null;
    /**
     * The ccOwner
     * @var string|null
     */
    protected ?string $ccOwner = null;
    /**
     * The ccToken
     * @var string|null
     */
    protected ?string $ccToken = null;
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
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
     * The creationTime
     * @var string|null
     */
    protected ?string $creationTime = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The cvvToken
     * @var string|null
     */
    protected ?string $cvvToken = null;
    /**
     * The cvvValidUntil
     * @var string|null
     */
    protected ?string $cvvValidUntil = null;
    /**
     * The id
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The ipAddress
     * @var string|null
     */
    protected ?string $ipAddress = null;
    /**
     * The passengerScope
     * @var string|null
     */
    protected ?string $passengerScope = null;
    /**
     * The totalAmount
     * @var float|null
     */
    protected ?float $totalAmount = null;
    /**
     * Constructor method for PaymentTokenDTO
     * @uses PaymentTokenDTO::setAgencyEmail()
     * @uses PaymentTokenDTO::setBookingReference()
     * @uses PaymentTokenDTO::setCcFeeAmount()
     * @uses PaymentTokenDTO::setCcOwner()
     * @uses PaymentTokenDTO::setCcToken()
     * @uses PaymentTokenDTO::setCcType()
     * @uses PaymentTokenDTO::setCcValidMonth()
     * @uses PaymentTokenDTO::setCcValidYear()
     * @uses PaymentTokenDTO::setCreationTime()
     * @uses PaymentTokenDTO::setCreationUser()
     * @uses PaymentTokenDTO::setCurrency()
     * @uses PaymentTokenDTO::setCvvToken()
     * @uses PaymentTokenDTO::setCvvValidUntil()
     * @uses PaymentTokenDTO::setId()
     * @uses PaymentTokenDTO::setIpAddress()
     * @uses PaymentTokenDTO::setPassengerScope()
     * @uses PaymentTokenDTO::setTotalAmount()
     * @param string $agencyEmail
     * @param string $bookingReference
     * @param float $ccFeeAmount
     * @param string $ccOwner
     * @param string $ccToken
     * @param string $ccType
     * @param int $ccValidMonth
     * @param int $ccValidYear
     * @param string $creationTime
     * @param int $creationUser
     * @param string $currency
     * @param string $cvvToken
     * @param string $cvvValidUntil
     * @param string $id
     * @param string $ipAddress
     * @param string $passengerScope
     * @param float $totalAmount
     */
    public function __construct(?string $agencyEmail = null, ?string $bookingReference = null, ?float $ccFeeAmount = null, ?string $ccOwner = null, ?string $ccToken = null, ?string $ccType = null, ?int $ccValidMonth = null, ?int $ccValidYear = null, ?string $creationTime = null, ?int $creationUser = null, ?string $currency = null, ?string $cvvToken = null, ?string $cvvValidUntil = null, ?string $id = null, ?string $ipAddress = null, ?string $passengerScope = null, ?float $totalAmount = null)
    {
        $this
            ->setAgencyEmail($agencyEmail)
            ->setBookingReference($bookingReference)
            ->setCcFeeAmount($ccFeeAmount)
            ->setCcOwner($ccOwner)
            ->setCcToken($ccToken)
            ->setCcType($ccType)
            ->setCcValidMonth($ccValidMonth)
            ->setCcValidYear($ccValidYear)
            ->setCreationTime($creationTime)
            ->setCreationUser($creationUser)
            ->setCurrency($currency)
            ->setCvvToken($cvvToken)
            ->setCvvValidUntil($cvvValidUntil)
            ->setId($id)
            ->setIpAddress($ipAddress)
            ->setPassengerScope($passengerScope)
            ->setTotalAmount($totalAmount);
    }
    /**
     * Get agencyEmail value
     * @return string|null
     */
    public function getAgencyEmail(): ?string
    {
        return $this->agencyEmail;
    }
    /**
     * Set agencyEmail value
     * @param string $agencyEmail
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenDTO
     */
    public function setAgencyEmail(?string $agencyEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyEmail) && !is_string($agencyEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyEmail, true), gettype($agencyEmail)), __LINE__);
        }
        $this->agencyEmail = $agencyEmail;
        
        return $this;
    }
    /**
     * Get bookingReference value
     * @return string|null
     */
    public function getBookingReference(): ?string
    {
        return $this->bookingReference;
    }
    /**
     * Set bookingReference value
     * @param string $bookingReference
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenDTO
     */
    public function setBookingReference(?string $bookingReference = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingReference) && !is_string($bookingReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingReference, true), gettype($bookingReference)), __LINE__);
        }
        $this->bookingReference = $bookingReference;
        
        return $this;
    }
    /**
     * Get ccFeeAmount value
     * @return float|null
     */
    public function getCcFeeAmount(): ?float
    {
        return $this->ccFeeAmount;
    }
    /**
     * Set ccFeeAmount value
     * @param float $ccFeeAmount
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenDTO
     */
    public function setCcFeeAmount(?float $ccFeeAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($ccFeeAmount) && !(is_float($ccFeeAmount) || is_numeric($ccFeeAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ccFeeAmount, true), gettype($ccFeeAmount)), __LINE__);
        }
        $this->ccFeeAmount = $ccFeeAmount;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenDTO
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
     * Get ccToken value
     * @return string|null
     */
    public function getCcToken(): ?string
    {
        return $this->ccToken;
    }
    /**
     * Set ccToken value
     * @param string $ccToken
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenDTO
     */
    public function setCcToken(?string $ccToken = null): self
    {
        // validation for constraint: string
        if (!is_null($ccToken) && !is_string($ccToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccToken, true), gettype($ccToken)), __LINE__);
        }
        $this->ccToken = $ccToken;
        
        return $this;
    }
    /**
     * Get ccType value
     * @return string|null
     */
    public function getCcType(): ?string
    {
        return $this->ccType;
    }
    /**
     * Set ccType value
     * @param string $ccType
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenDTO
     */
    public function setCcType(?string $ccType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccType) && !is_string($ccType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccType, true), gettype($ccType)), __LINE__);
        }
        $this->ccType = $ccType;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenDTO
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
     * Get creationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * Set creationTime value
     * @param string $creationTime
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenDTO
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->creationTime = $creationTime;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenDTO
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
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenDTO
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get cvvToken value
     * @return string|null
     */
    public function getCvvToken(): ?string
    {
        return $this->cvvToken;
    }
    /**
     * Set cvvToken value
     * @param string $cvvToken
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenDTO
     */
    public function setCvvToken(?string $cvvToken = null): self
    {
        // validation for constraint: string
        if (!is_null($cvvToken) && !is_string($cvvToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cvvToken, true), gettype($cvvToken)), __LINE__);
        }
        $this->cvvToken = $cvvToken;
        
        return $this;
    }
    /**
     * Get cvvValidUntil value
     * @return string|null
     */
    public function getCvvValidUntil(): ?string
    {
        return $this->cvvValidUntil;
    }
    /**
     * Set cvvValidUntil value
     * @param string $cvvValidUntil
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenDTO
     */
    public function setCvvValidUntil(?string $cvvValidUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($cvvValidUntil) && !is_string($cvvValidUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cvvValidUntil, true), gettype($cvvValidUntil)), __LINE__);
        }
        $this->cvvValidUntil = $cvvValidUntil;
        
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenDTO
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get ipAddress value
     * @return string|null
     */
    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }
    /**
     * Set ipAddress value
     * @param string $ipAddress
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenDTO
     */
    public function setIpAddress(?string $ipAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($ipAddress) && !is_string($ipAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ipAddress, true), gettype($ipAddress)), __LINE__);
        }
        $this->ipAddress = $ipAddress;
        
        return $this;
    }
    /**
     * Get passengerScope value
     * @return string|null
     */
    public function getPassengerScope(): ?string
    {
        return $this->passengerScope;
    }
    /**
     * Set passengerScope value
     * @param string $passengerScope
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenDTO
     */
    public function setPassengerScope(?string $passengerScope = null): self
    {
        // validation for constraint: string
        if (!is_null($passengerScope) && !is_string($passengerScope)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerScope, true), gettype($passengerScope)), __LINE__);
        }
        $this->passengerScope = $passengerScope;
        
        return $this;
    }
    /**
     * Get totalAmount value
     * @return float|null
     */
    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }
    /**
     * Set totalAmount value
     * @param float $totalAmount
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenDTO
     */
    public function setTotalAmount(?float $totalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalAmount) && !(is_float($totalAmount) || is_numeric($totalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalAmount, true), gettype($totalAmount)), __LINE__);
        }
        $this->totalAmount = $totalAmount;
        
        return $this;
    }
}
