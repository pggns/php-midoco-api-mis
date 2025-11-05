<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementImportColumnDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementImportColumnDTO extends AbstractStructBase
{
    /**
     * The columnName
     * @var string|null
     */
    protected ?string $columnName = null;
    /**
     * The columnNo
     * @var int|null
     */
    protected ?int $columnNo = null;
    /**
     * The datatype
     * @var string|null
     */
    protected ?string $datatype = null;
    /**
     * The ignored
     * @var bool|null
     */
    protected ?bool $ignored = null;
    /**
     * The importId
     * @var int|null
     */
    protected ?int $importId = null;
    /**
     * Constructor method for UmbrellaSettlementImportColumnDTO
     * @uses UmbrellaSettlementImportColumnDTO::setColumnName()
     * @uses UmbrellaSettlementImportColumnDTO::setColumnNo()
     * @uses UmbrellaSettlementImportColumnDTO::setDatatype()
     * @uses UmbrellaSettlementImportColumnDTO::setIgnored()
     * @uses UmbrellaSettlementImportColumnDTO::setImportId()
     * @param string $columnName
     * @param int $columnNo
     * @param string $datatype
     * @param bool $ignored
     * @param int $importId
     */
    public function __construct(?string $columnName = null, ?int $columnNo = null, ?string $datatype = null, ?bool $ignored = null, ?int $importId = null)
    {
        $this
            ->setColumnName($columnName)
            ->setColumnNo($columnNo)
            ->setDatatype($datatype)
            ->setIgnored($ignored)
            ->setImportId($importId);
    }
    /**
     * Get columnName value
     * @return string|null
     */
    public function getColumnName(): ?string
    {
        return $this->columnName;
    }
    /**
     * Set columnName value
     * @param string $columnName
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportColumnDTO
     */
    public function setColumnName(?string $columnName = null): self
    {
        // validation for constraint: string
        if (!is_null($columnName) && !is_string($columnName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($columnName, true), gettype($columnName)), __LINE__);
        }
        $this->columnName = $columnName;
        
        return $this;
    }
    /**
     * Get columnNo value
     * @return int|null
     */
    public function getColumnNo(): ?int
    {
        return $this->columnNo;
    }
    /**
     * Set columnNo value
     * @param int $columnNo
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportColumnDTO
     */
    public function setColumnNo(?int $columnNo = null): self
    {
        // validation for constraint: int
        if (!is_null($columnNo) && !(is_int($columnNo) || ctype_digit($columnNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($columnNo, true), gettype($columnNo)), __LINE__);
        }
        $this->columnNo = $columnNo;
        
        return $this;
    }
    /**
     * Get datatype value
     * @return string|null
     */
    public function getDatatype(): ?string
    {
        return $this->datatype;
    }
    /**
     * Set datatype value
     * @param string $datatype
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportColumnDTO
     */
    public function setDatatype(?string $datatype = null): self
    {
        // validation for constraint: string
        if (!is_null($datatype) && !is_string($datatype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datatype, true), gettype($datatype)), __LINE__);
        }
        $this->datatype = $datatype;
        
        return $this;
    }
    /**
     * Get ignored value
     * @return bool|null
     */
    public function getIgnored(): ?bool
    {
        return $this->ignored;
    }
    /**
     * Set ignored value
     * @param bool $ignored
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportColumnDTO
     */
    public function setIgnored(?bool $ignored = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ignored) && !is_bool($ignored)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignored, true), gettype($ignored)), __LINE__);
        }
        $this->ignored = $ignored;
        
        return $this;
    }
    /**
     * Get importId value
     * @return int|null
     */
    public function getImportId(): ?int
    {
        return $this->importId;
    }
    /**
     * Set importId value
     * @param int $importId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportColumnDTO
     */
    public function setImportId(?int $importId = null): self
    {
        // validation for constraint: int
        if (!is_null($importId) && !(is_int($importId) || ctype_digit($importId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($importId, true), gettype($importId)), __LINE__);
        }
        $this->importId = $importId;
        
        return $this;
    }
}
