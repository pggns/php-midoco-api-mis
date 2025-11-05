<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BexioLanguageDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BexioLanguageDTO extends AbstractStructBase
{
    /**
     * The dateFormat
     * @var string|null
     */
    protected ?string $dateFormat = null;
    /**
     * The dateFormatId
     * @var int|null
     */
    protected ?int $dateFormatId = null;
    /**
     * The decimalPoint
     * @var string|null
     */
    protected ?string $decimalPoint = null;
    /**
     * The isVisibleInMidoco
     * @var bool|null
     */
    protected ?bool $isVisibleInMidoco = null;
    /**
     * The iso6391
     * @var string|null
     */
    protected ?string $iso6391 = null;
    /**
     * The languageId
     * @var int|null
     */
    protected ?int $languageId = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The thousandsSeparator
     * @var string|null
     */
    protected ?string $thousandsSeparator = null;
    /**
     * Constructor method for BexioLanguageDTO
     * @uses BexioLanguageDTO::setDateFormat()
     * @uses BexioLanguageDTO::setDateFormatId()
     * @uses BexioLanguageDTO::setDecimalPoint()
     * @uses BexioLanguageDTO::setIsVisibleInMidoco()
     * @uses BexioLanguageDTO::setIso6391()
     * @uses BexioLanguageDTO::setLanguageId()
     * @uses BexioLanguageDTO::setName()
     * @uses BexioLanguageDTO::setThousandsSeparator()
     * @param string $dateFormat
     * @param int $dateFormatId
     * @param string $decimalPoint
     * @param bool $isVisibleInMidoco
     * @param string $iso6391
     * @param int $languageId
     * @param string $name
     * @param string $thousandsSeparator
     */
    public function __construct(?string $dateFormat = null, ?int $dateFormatId = null, ?string $decimalPoint = null, ?bool $isVisibleInMidoco = null, ?string $iso6391 = null, ?int $languageId = null, ?string $name = null, ?string $thousandsSeparator = null)
    {
        $this
            ->setDateFormat($dateFormat)
            ->setDateFormatId($dateFormatId)
            ->setDecimalPoint($decimalPoint)
            ->setIsVisibleInMidoco($isVisibleInMidoco)
            ->setIso6391($iso6391)
            ->setLanguageId($languageId)
            ->setName($name)
            ->setThousandsSeparator($thousandsSeparator);
    }
    /**
     * Get dateFormat value
     * @return string|null
     */
    public function getDateFormat(): ?string
    {
        return $this->dateFormat;
    }
    /**
     * Set dateFormat value
     * @param string $dateFormat
     * @return \Pggns\MidocoApi\Mis\StructType\BexioLanguageDTO
     */
    public function setDateFormat(?string $dateFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($dateFormat) && !is_string($dateFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateFormat, true), gettype($dateFormat)), __LINE__);
        }
        $this->dateFormat = $dateFormat;
        
        return $this;
    }
    /**
     * Get dateFormatId value
     * @return int|null
     */
    public function getDateFormatId(): ?int
    {
        return $this->dateFormatId;
    }
    /**
     * Set dateFormatId value
     * @param int $dateFormatId
     * @return \Pggns\MidocoApi\Mis\StructType\BexioLanguageDTO
     */
    public function setDateFormatId(?int $dateFormatId = null): self
    {
        // validation for constraint: int
        if (!is_null($dateFormatId) && !(is_int($dateFormatId) || ctype_digit($dateFormatId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dateFormatId, true), gettype($dateFormatId)), __LINE__);
        }
        $this->dateFormatId = $dateFormatId;
        
        return $this;
    }
    /**
     * Get decimalPoint value
     * @return string|null
     */
    public function getDecimalPoint(): ?string
    {
        return $this->decimalPoint;
    }
    /**
     * Set decimalPoint value
     * @param string $decimalPoint
     * @return \Pggns\MidocoApi\Mis\StructType\BexioLanguageDTO
     */
    public function setDecimalPoint(?string $decimalPoint = null): self
    {
        // validation for constraint: string
        if (!is_null($decimalPoint) && !is_string($decimalPoint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($decimalPoint, true), gettype($decimalPoint)), __LINE__);
        }
        $this->decimalPoint = $decimalPoint;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\BexioLanguageDTO
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
     * Get iso6391 value
     * @return string|null
     */
    public function getIso6391(): ?string
    {
        return $this->iso6391;
    }
    /**
     * Set iso6391 value
     * @param string $iso6391
     * @return \Pggns\MidocoApi\Mis\StructType\BexioLanguageDTO
     */
    public function setIso6391(?string $iso6391 = null): self
    {
        // validation for constraint: string
        if (!is_null($iso6391) && !is_string($iso6391)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iso6391, true), gettype($iso6391)), __LINE__);
        }
        $this->iso6391 = $iso6391;
        
        return $this;
    }
    /**
     * Get languageId value
     * @return int|null
     */
    public function getLanguageId(): ?int
    {
        return $this->languageId;
    }
    /**
     * Set languageId value
     * @param int $languageId
     * @return \Pggns\MidocoApi\Mis\StructType\BexioLanguageDTO
     */
    public function setLanguageId(?int $languageId = null): self
    {
        // validation for constraint: int
        if (!is_null($languageId) && !(is_int($languageId) || ctype_digit($languageId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($languageId, true), gettype($languageId)), __LINE__);
        }
        $this->languageId = $languageId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\BexioLanguageDTO
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
     * Get thousandsSeparator value
     * @return string|null
     */
    public function getThousandsSeparator(): ?string
    {
        return $this->thousandsSeparator;
    }
    /**
     * Set thousandsSeparator value
     * @param string $thousandsSeparator
     * @return \Pggns\MidocoApi\Mis\StructType\BexioLanguageDTO
     */
    public function setThousandsSeparator(?string $thousandsSeparator = null): self
    {
        // validation for constraint: string
        if (!is_null($thousandsSeparator) && !is_string($thousandsSeparator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($thousandsSeparator, true), gettype($thousandsSeparator)), __LINE__);
        }
        $this->thousandsSeparator = $thousandsSeparator;
        
        return $this;
    }
}
