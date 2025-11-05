<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnitAdminVerificationDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UnitAdminVerificationDTO extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The verifyTimestamp
     * @var string|null
     */
    protected ?string $verifyTimestamp = null;
    /**
     * The verifyUser
     * @var int|null
     */
    protected ?int $verifyUser = null;
    /**
     * Constructor method for UnitAdminVerificationDTO
     * @uses UnitAdminVerificationDTO::setUnitName()
     * @uses UnitAdminVerificationDTO::setVerifyTimestamp()
     * @uses UnitAdminVerificationDTO::setVerifyUser()
     * @param string $unitName
     * @param string $verifyTimestamp
     * @param int $verifyUser
     */
    public function __construct(?string $unitName = null, ?string $verifyTimestamp = null, ?int $verifyUser = null)
    {
        $this
            ->setUnitName($unitName)
            ->setVerifyTimestamp($verifyTimestamp)
            ->setVerifyUser($verifyUser);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Mis\StructType\UnitAdminVerificationDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get verifyTimestamp value
     * @return string|null
     */
    public function getVerifyTimestamp(): ?string
    {
        return $this->verifyTimestamp;
    }
    /**
     * Set verifyTimestamp value
     * @param string $verifyTimestamp
     * @return \Pggns\MidocoApi\Mis\StructType\UnitAdminVerificationDTO
     */
    public function setVerifyTimestamp(?string $verifyTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($verifyTimestamp) && !is_string($verifyTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($verifyTimestamp, true), gettype($verifyTimestamp)), __LINE__);
        }
        $this->verifyTimestamp = $verifyTimestamp;
        
        return $this;
    }
    /**
     * Get verifyUser value
     * @return int|null
     */
    public function getVerifyUser(): ?int
    {
        return $this->verifyUser;
    }
    /**
     * Set verifyUser value
     * @param int $verifyUser
     * @return \Pggns\MidocoApi\Mis\StructType\UnitAdminVerificationDTO
     */
    public function setVerifyUser(?int $verifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($verifyUser) && !(is_int($verifyUser) || ctype_digit($verifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($verifyUser, true), gettype($verifyUser)), __LINE__);
        }
        $this->verifyUser = $verifyUser;
        
        return $this;
    }
}
