<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BexioTaxDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BexioTaxDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var int|null
     */
    protected ?int $accountId = null;
    /**
     * The code
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The digit
     * @var string|null
     */
    protected ?string $digit = null;
    /**
     * The displayName
     * @var string|null
     */
    protected ?string $displayName = null;
    /**
     * The endMonth
     * @var int|null
     */
    protected ?int $endMonth = null;
    /**
     * The endYear
     * @var int|null
     */
    protected ?int $endYear = null;
    /**
     * The isActive
     * @var bool|null
     */
    protected ?bool $isActive = null;
    /**
     * The isVisibleInMidoco
     * @var bool|null
     */
    protected ?bool $isVisibleInMidoco = null;
    /**
     * The netTaxValue
     * @var float|null
     */
    protected ?float $netTaxValue = null;
    /**
     * The startMonth
     * @var int|null
     */
    protected ?int $startMonth = null;
    /**
     * The startYear
     * @var int|null
     */
    protected ?int $startYear = null;
    /**
     * The taxId
     * @var int|null
     */
    protected ?int $taxId = null;
    /**
     * The taxSettlementType
     * @var string|null
     */
    protected ?string $taxSettlementType = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The value
     * @var float|null
     */
    protected ?float $value = null;
    /**
     * Constructor method for BexioTaxDTO
     * @uses BexioTaxDTO::setAccountId()
     * @uses BexioTaxDTO::setCode()
     * @uses BexioTaxDTO::setDigit()
     * @uses BexioTaxDTO::setDisplayName()
     * @uses BexioTaxDTO::setEndMonth()
     * @uses BexioTaxDTO::setEndYear()
     * @uses BexioTaxDTO::setIsActive()
     * @uses BexioTaxDTO::setIsVisibleInMidoco()
     * @uses BexioTaxDTO::setNetTaxValue()
     * @uses BexioTaxDTO::setStartMonth()
     * @uses BexioTaxDTO::setStartYear()
     * @uses BexioTaxDTO::setTaxId()
     * @uses BexioTaxDTO::setTaxSettlementType()
     * @uses BexioTaxDTO::setType()
     * @uses BexioTaxDTO::setValue()
     * @param int $accountId
     * @param string $code
     * @param string $digit
     * @param string $displayName
     * @param int $endMonth
     * @param int $endYear
     * @param bool $isActive
     * @param bool $isVisibleInMidoco
     * @param float $netTaxValue
     * @param int $startMonth
     * @param int $startYear
     * @param int $taxId
     * @param string $taxSettlementType
     * @param string $type
     * @param float $value
     */
    public function __construct(?int $accountId = null, ?string $code = null, ?string $digit = null, ?string $displayName = null, ?int $endMonth = null, ?int $endYear = null, ?bool $isActive = null, ?bool $isVisibleInMidoco = null, ?float $netTaxValue = null, ?int $startMonth = null, ?int $startYear = null, ?int $taxId = null, ?string $taxSettlementType = null, ?string $type = null, ?float $value = null)
    {
        $this
            ->setAccountId($accountId)
            ->setCode($code)
            ->setDigit($digit)
            ->setDisplayName($displayName)
            ->setEndMonth($endMonth)
            ->setEndYear($endYear)
            ->setIsActive($isActive)
            ->setIsVisibleInMidoco($isVisibleInMidoco)
            ->setNetTaxValue($netTaxValue)
            ->setStartMonth($startMonth)
            ->setStartYear($startYear)
            ->setTaxId($taxId)
            ->setTaxSettlementType($taxSettlementType)
            ->setType($type)
            ->setValue($value);
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
     * @return \Pggns\MidocoApi\Mis\StructType\BexioTaxDTO
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
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Pggns\MidocoApi\Mis\StructType\BexioTaxDTO
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Get digit value
     * @return string|null
     */
    public function getDigit(): ?string
    {
        return $this->digit;
    }
    /**
     * Set digit value
     * @param string $digit
     * @return \Pggns\MidocoApi\Mis\StructType\BexioTaxDTO
     */
    public function setDigit(?string $digit = null): self
    {
        // validation for constraint: string
        if (!is_null($digit) && !is_string($digit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($digit, true), gettype($digit)), __LINE__);
        }
        $this->digit = $digit;
        
        return $this;
    }
    /**
     * Get displayName value
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }
    /**
     * Set displayName value
     * @param string $displayName
     * @return \Pggns\MidocoApi\Mis\StructType\BexioTaxDTO
     */
    public function setDisplayName(?string $displayName = null): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->displayName = $displayName;
        
        return $this;
    }
    /**
     * Get endMonth value
     * @return int|null
     */
    public function getEndMonth(): ?int
    {
        return $this->endMonth;
    }
    /**
     * Set endMonth value
     * @param int $endMonth
     * @return \Pggns\MidocoApi\Mis\StructType\BexioTaxDTO
     */
    public function setEndMonth(?int $endMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($endMonth) && !(is_int($endMonth) || ctype_digit($endMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($endMonth, true), gettype($endMonth)), __LINE__);
        }
        $this->endMonth = $endMonth;
        
        return $this;
    }
    /**
     * Get endYear value
     * @return int|null
     */
    public function getEndYear(): ?int
    {
        return $this->endYear;
    }
    /**
     * Set endYear value
     * @param int $endYear
     * @return \Pggns\MidocoApi\Mis\StructType\BexioTaxDTO
     */
    public function setEndYear(?int $endYear = null): self
    {
        // validation for constraint: int
        if (!is_null($endYear) && !(is_int($endYear) || ctype_digit($endYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($endYear, true), gettype($endYear)), __LINE__);
        }
        $this->endYear = $endYear;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\BexioTaxDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\BexioTaxDTO
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
     * Get netTaxValue value
     * @return float|null
     */
    public function getNetTaxValue(): ?float
    {
        return $this->netTaxValue;
    }
    /**
     * Set netTaxValue value
     * @param float $netTaxValue
     * @return \Pggns\MidocoApi\Mis\StructType\BexioTaxDTO
     */
    public function setNetTaxValue(?float $netTaxValue = null): self
    {
        // validation for constraint: float
        if (!is_null($netTaxValue) && !(is_float($netTaxValue) || is_numeric($netTaxValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($netTaxValue, true), gettype($netTaxValue)), __LINE__);
        }
        $this->netTaxValue = $netTaxValue;
        
        return $this;
    }
    /**
     * Get startMonth value
     * @return int|null
     */
    public function getStartMonth(): ?int
    {
        return $this->startMonth;
    }
    /**
     * Set startMonth value
     * @param int $startMonth
     * @return \Pggns\MidocoApi\Mis\StructType\BexioTaxDTO
     */
    public function setStartMonth(?int $startMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($startMonth) && !(is_int($startMonth) || ctype_digit($startMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($startMonth, true), gettype($startMonth)), __LINE__);
        }
        $this->startMonth = $startMonth;
        
        return $this;
    }
    /**
     * Get startYear value
     * @return int|null
     */
    public function getStartYear(): ?int
    {
        return $this->startYear;
    }
    /**
     * Set startYear value
     * @param int $startYear
     * @return \Pggns\MidocoApi\Mis\StructType\BexioTaxDTO
     */
    public function setStartYear(?int $startYear = null): self
    {
        // validation for constraint: int
        if (!is_null($startYear) && !(is_int($startYear) || ctype_digit($startYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($startYear, true), gettype($startYear)), __LINE__);
        }
        $this->startYear = $startYear;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\BexioTaxDTO
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
    /**
     * Get taxSettlementType value
     * @return string|null
     */
    public function getTaxSettlementType(): ?string
    {
        return $this->taxSettlementType;
    }
    /**
     * Set taxSettlementType value
     * @param string $taxSettlementType
     * @return \Pggns\MidocoApi\Mis\StructType\BexioTaxDTO
     */
    public function setTaxSettlementType(?string $taxSettlementType = null): self
    {
        // validation for constraint: string
        if (!is_null($taxSettlementType) && !is_string($taxSettlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxSettlementType, true), gettype($taxSettlementType)), __LINE__);
        }
        $this->taxSettlementType = $taxSettlementType;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\BexioTaxDTO
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
    /**
     * Get value value
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param float $value
     * @return \Pggns\MidocoApi\Mis\StructType\BexioTaxDTO
     */
    public function setValue(?float $value = null): self
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
}
