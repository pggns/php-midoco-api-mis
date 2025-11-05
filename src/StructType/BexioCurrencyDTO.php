<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BexioCurrencyDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BexioCurrencyDTO extends AbstractStructBase
{
    /**
     * The currencyId
     * @var int|null
     */
    protected ?int $currencyId = null;
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
     * The roundFactor
     * @var float|null
     */
    protected ?float $roundFactor = null;
    /**
     * Constructor method for BexioCurrencyDTO
     * @uses BexioCurrencyDTO::setCurrencyId()
     * @uses BexioCurrencyDTO::setIsVisibleInMidoco()
     * @uses BexioCurrencyDTO::setName()
     * @uses BexioCurrencyDTO::setRoundFactor()
     * @param int $currencyId
     * @param bool $isVisibleInMidoco
     * @param string $name
     * @param float $roundFactor
     */
    public function __construct(?int $currencyId = null, ?bool $isVisibleInMidoco = null, ?string $name = null, ?float $roundFactor = null)
    {
        $this
            ->setCurrencyId($currencyId)
            ->setIsVisibleInMidoco($isVisibleInMidoco)
            ->setName($name)
            ->setRoundFactor($roundFactor);
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
     * @return \Pggns\MidocoApi\Mis\StructType\BexioCurrencyDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\BexioCurrencyDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\BexioCurrencyDTO
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
     * Get roundFactor value
     * @return float|null
     */
    public function getRoundFactor(): ?float
    {
        return $this->roundFactor;
    }
    /**
     * Set roundFactor value
     * @param float $roundFactor
     * @return \Pggns\MidocoApi\Mis\StructType\BexioCurrencyDTO
     */
    public function setRoundFactor(?float $roundFactor = null): self
    {
        // validation for constraint: float
        if (!is_null($roundFactor) && !(is_float($roundFactor) || is_numeric($roundFactor))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($roundFactor, true), gettype($roundFactor)), __LINE__);
        }
        $this->roundFactor = $roundFactor;
        
        return $this;
    }
}
