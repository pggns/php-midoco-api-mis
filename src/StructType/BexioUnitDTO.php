<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BexioUnitDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BexioUnitDTO extends AbstractStructBase
{
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
     * The unitId
     * @var int|null
     */
    protected ?int $unitId = null;
    /**
     * Constructor method for BexioUnitDTO
     * @uses BexioUnitDTO::setIsVisibleInMidoco()
     * @uses BexioUnitDTO::setName()
     * @uses BexioUnitDTO::setUnitId()
     * @param bool $isVisibleInMidoco
     * @param string $name
     * @param int $unitId
     */
    public function __construct(?bool $isVisibleInMidoco = null, ?string $name = null, ?int $unitId = null)
    {
        $this
            ->setIsVisibleInMidoco($isVisibleInMidoco)
            ->setName($name)
            ->setUnitId($unitId);
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
     * @return \Pggns\MidocoApi\Mis\StructType\BexioUnitDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\BexioUnitDTO
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
     * Get unitId value
     * @return int|null
     */
    public function getUnitId(): ?int
    {
        return $this->unitId;
    }
    /**
     * Set unitId value
     * @param int $unitId
     * @return \Pggns\MidocoApi\Mis\StructType\BexioUnitDTO
     */
    public function setUnitId(?int $unitId = null): self
    {
        // validation for constraint: int
        if (!is_null($unitId) && !(is_int($unitId) || ctype_digit($unitId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($unitId, true), gettype($unitId)), __LINE__);
        }
        $this->unitId = $unitId;
        
        return $this;
    }
}
