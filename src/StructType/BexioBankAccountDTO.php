<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BexioBankAccountDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BexioBankAccountDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var int|null
     */
    protected ?int $accountId = null;
    /**
     * The bankAccountId
     * @var int|null
     */
    protected ?int $bankAccountId = null;
    /**
     * The bankAccountNr
     * @var string|null
     */
    protected ?string $bankAccountNr = null;
    /**
     * The bankName
     * @var string|null
     */
    protected ?string $bankName = null;
    /**
     * The bankNr
     * @var string|null
     */
    protected ?string $bankNr = null;
    /**
     * The currencyId
     * @var int|null
     */
    protected ?int $currencyId = null;
    /**
     * The ibanNr
     * @var string|null
     */
    protected ?string $ibanNr = null;
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
     * The owner
     * @var string|null
     */
    protected ?string $owner = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for BexioBankAccountDTO
     * @uses BexioBankAccountDTO::setAccountId()
     * @uses BexioBankAccountDTO::setBankAccountId()
     * @uses BexioBankAccountDTO::setBankAccountNr()
     * @uses BexioBankAccountDTO::setBankName()
     * @uses BexioBankAccountDTO::setBankNr()
     * @uses BexioBankAccountDTO::setCurrencyId()
     * @uses BexioBankAccountDTO::setIbanNr()
     * @uses BexioBankAccountDTO::setIsVisibleInMidoco()
     * @uses BexioBankAccountDTO::setName()
     * @uses BexioBankAccountDTO::setOwner()
     * @uses BexioBankAccountDTO::setType()
     * @param int $accountId
     * @param int $bankAccountId
     * @param string $bankAccountNr
     * @param string $bankName
     * @param string $bankNr
     * @param int $currencyId
     * @param string $ibanNr
     * @param bool $isVisibleInMidoco
     * @param string $name
     * @param string $owner
     * @param string $type
     */
    public function __construct(?int $accountId = null, ?int $bankAccountId = null, ?string $bankAccountNr = null, ?string $bankName = null, ?string $bankNr = null, ?int $currencyId = null, ?string $ibanNr = null, ?bool $isVisibleInMidoco = null, ?string $name = null, ?string $owner = null, ?string $type = null)
    {
        $this
            ->setAccountId($accountId)
            ->setBankAccountId($bankAccountId)
            ->setBankAccountNr($bankAccountNr)
            ->setBankName($bankName)
            ->setBankNr($bankNr)
            ->setCurrencyId($currencyId)
            ->setIbanNr($ibanNr)
            ->setIsVisibleInMidoco($isVisibleInMidoco)
            ->setName($name)
            ->setOwner($owner)
            ->setType($type);
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
     * @return \Pggns\MidocoApi\Mis\StructType\BexioBankAccountDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\BexioBankAccountDTO
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
     * Get bankAccountNr value
     * @return string|null
     */
    public function getBankAccountNr(): ?string
    {
        return $this->bankAccountNr;
    }
    /**
     * Set bankAccountNr value
     * @param string $bankAccountNr
     * @return \Pggns\MidocoApi\Mis\StructType\BexioBankAccountDTO
     */
    public function setBankAccountNr(?string $bankAccountNr = null): self
    {
        // validation for constraint: string
        if (!is_null($bankAccountNr) && !is_string($bankAccountNr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankAccountNr, true), gettype($bankAccountNr)), __LINE__);
        }
        $this->bankAccountNr = $bankAccountNr;
        
        return $this;
    }
    /**
     * Get bankName value
     * @return string|null
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }
    /**
     * Set bankName value
     * @param string $bankName
     * @return \Pggns\MidocoApi\Mis\StructType\BexioBankAccountDTO
     */
    public function setBankName(?string $bankName = null): self
    {
        // validation for constraint: string
        if (!is_null($bankName) && !is_string($bankName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankName, true), gettype($bankName)), __LINE__);
        }
        $this->bankName = $bankName;
        
        return $this;
    }
    /**
     * Get bankNr value
     * @return string|null
     */
    public function getBankNr(): ?string
    {
        return $this->bankNr;
    }
    /**
     * Set bankNr value
     * @param string $bankNr
     * @return \Pggns\MidocoApi\Mis\StructType\BexioBankAccountDTO
     */
    public function setBankNr(?string $bankNr = null): self
    {
        // validation for constraint: string
        if (!is_null($bankNr) && !is_string($bankNr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankNr, true), gettype($bankNr)), __LINE__);
        }
        $this->bankNr = $bankNr;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\BexioBankAccountDTO
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
     * Get ibanNr value
     * @return string|null
     */
    public function getIbanNr(): ?string
    {
        return $this->ibanNr;
    }
    /**
     * Set ibanNr value
     * @param string $ibanNr
     * @return \Pggns\MidocoApi\Mis\StructType\BexioBankAccountDTO
     */
    public function setIbanNr(?string $ibanNr = null): self
    {
        // validation for constraint: string
        if (!is_null($ibanNr) && !is_string($ibanNr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ibanNr, true), gettype($ibanNr)), __LINE__);
        }
        $this->ibanNr = $ibanNr;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\BexioBankAccountDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\BexioBankAccountDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\BexioBankAccountDTO
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
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Mis\StructType\BexioBankAccountDTO
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
