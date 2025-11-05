<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BexioAccountDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BexioAccountDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var int|null
     */
    protected ?int $accountId = null;
    /**
     * The accountNo
     * @var string|null
     */
    protected ?string $accountNo = null;
    /**
     * The accountType
     * @var int|null
     */
    protected ?int $accountType = null;
    /**
     * The fibuAccountGroupId
     * @var int|null
     */
    protected ?int $fibuAccountGroupId = null;
    /**
     * The isActive
     * @var bool|null
     */
    protected ?bool $isActive = null;
    /**
     * The isLocked
     * @var bool|null
     */
    protected ?bool $isLocked = null;
    /**
     * The isVisibleInMidoco
     * @var bool|null
     */
    protected ?bool $isVisibleInMidoco = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The taxId
     * @var int|null
     */
    protected ?int $taxId = null;
    /**
     * Constructor method for BexioAccountDTO
     * @uses BexioAccountDTO::setAccountId()
     * @uses BexioAccountDTO::setAccountNo()
     * @uses BexioAccountDTO::setAccountType()
     * @uses BexioAccountDTO::setFibuAccountGroupId()
     * @uses BexioAccountDTO::setIsActive()
     * @uses BexioAccountDTO::setIsLocked()
     * @uses BexioAccountDTO::setIsVisibleInMidoco()
     * @uses BexioAccountDTO::setName()
     * @uses BexioAccountDTO::setTaxId()
     * @param int $accountId
     * @param string $accountNo
     * @param int $accountType
     * @param int $fibuAccountGroupId
     * @param bool $isActive
     * @param bool $isLocked
     * @param bool $isVisibleInMidoco
     * @param string $name
     * @param int $taxId
     */
    public function __construct(?int $accountId = null, ?string $accountNo = null, ?int $accountType = null, ?int $fibuAccountGroupId = null, ?bool $isActive = null, ?bool $isLocked = null, ?bool $isVisibleInMidoco = null, ?string $name = null, ?int $taxId = null)
    {
        $this
            ->setAccountId($accountId)
            ->setAccountNo($accountNo)
            ->setAccountType($accountType)
            ->setFibuAccountGroupId($fibuAccountGroupId)
            ->setIsActive($isActive)
            ->setIsLocked($isLocked)
            ->setIsVisibleInMidoco($isVisibleInMidoco)
            ->setName($name)
            ->setTaxId($taxId);
    }
    /**
     * Get accountId value
     * @return int|null
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param int $accountId
     * @return \Pggns\MidocoApi\Mis\StructType\BexioAccountDTO
     */
    public function setAccountId(?int $accountId = null): self
    {
        // validation for constraint: int
        if (!is_null($accountId) && !(is_int($accountId) || ctype_digit($accountId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get accountNo value
     * @return string|null
     */
    public function getAccountNo(): ?string
    {
        return $this->accountNo;
    }
    /**
     * Set accountNo value
     * @param string $accountNo
     * @return \Pggns\MidocoApi\Mis\StructType\BexioAccountDTO
     */
    public function setAccountNo(?string $accountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNo) && !is_string($accountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNo, true), gettype($accountNo)), __LINE__);
        }
        $this->accountNo = $accountNo;
        
        return $this;
    }
    /**
     * Get accountType value
     * @return int|null
     */
    public function getAccountType(): ?int
    {
        return $this->accountType;
    }
    /**
     * Set accountType value
     * @param int $accountType
     * @return \Pggns\MidocoApi\Mis\StructType\BexioAccountDTO
     */
    public function setAccountType(?int $accountType = null): self
    {
        // validation for constraint: int
        if (!is_null($accountType) && !(is_int($accountType) || ctype_digit($accountType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountType, true), gettype($accountType)), __LINE__);
        }
        $this->accountType = $accountType;
        
        return $this;
    }
    /**
     * Get fibuAccountGroupId value
     * @return int|null
     */
    public function getFibuAccountGroupId(): ?int
    {
        return $this->fibuAccountGroupId;
    }
    /**
     * Set fibuAccountGroupId value
     * @param int $fibuAccountGroupId
     * @return \Pggns\MidocoApi\Mis\StructType\BexioAccountDTO
     */
    public function setFibuAccountGroupId(?int $fibuAccountGroupId = null): self
    {
        // validation for constraint: int
        if (!is_null($fibuAccountGroupId) && !(is_int($fibuAccountGroupId) || ctype_digit($fibuAccountGroupId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fibuAccountGroupId, true), gettype($fibuAccountGroupId)), __LINE__);
        }
        $this->fibuAccountGroupId = $fibuAccountGroupId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\BexioAccountDTO
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
     * Get isLocked value
     * @return bool|null
     */
    public function getIsLocked(): ?bool
    {
        return $this->isLocked;
    }
    /**
     * Set isLocked value
     * @param bool $isLocked
     * @return \Pggns\MidocoApi\Mis\StructType\BexioAccountDTO
     */
    public function setIsLocked(?bool $isLocked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isLocked) && !is_bool($isLocked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isLocked, true), gettype($isLocked)), __LINE__);
        }
        $this->isLocked = $isLocked;
        
        return $this;
    }
    /**
     * Get isVisibleInMidoco value
     * @return bool|null
     */
    public function getIsVisibleInMidoco(): ?bool
    {
        return $this->isVisibleInMidoco;
    }
    /**
     * Set isVisibleInMidoco value
     * @param bool $isVisibleInMidoco
     * @return \Pggns\MidocoApi\Mis\StructType\BexioAccountDTO
     */
    public function setIsVisibleInMidoco(?bool $isVisibleInMidoco = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVisibleInMidoco) && !is_bool($isVisibleInMidoco)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVisibleInMidoco, true), gettype($isVisibleInMidoco)), __LINE__);
        }
        $this->isVisibleInMidoco = $isVisibleInMidoco;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\BexioAccountDTO
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
     * Get taxId value
     * @return int|null
     */
    public function getTaxId(): ?int
    {
        return $this->taxId;
    }
    /**
     * Set taxId value
     * @param int $taxId
     * @return \Pggns\MidocoApi\Mis\StructType\BexioAccountDTO
     */
    public function setTaxId(?int $taxId = null): self
    {
        // validation for constraint: int
        if (!is_null($taxId) && !(is_int($taxId) || ctype_digit($taxId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($taxId, true), gettype($taxId)), __LINE__);
        }
        $this->taxId = $taxId;
        
        return $this;
    }
}
