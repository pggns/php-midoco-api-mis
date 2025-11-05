<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementCsvColumnDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementCsvColumnDTO extends AbstractStructBase
{
    /**
     * The columnName
     * @var string|null
     */
    protected ?string $columnName = null;
    /**
     * The feeDefinitionId
     * @var int|null
     */
    protected ?int $feeDefinitionId = null;
    /**
     * Constructor method for UmbrellaSettlementCsvColumnDTO
     * @uses UmbrellaSettlementCsvColumnDTO::setColumnName()
     * @uses UmbrellaSettlementCsvColumnDTO::setFeeDefinitionId()
     * @param string $columnName
     * @param int $feeDefinitionId
     */
    public function __construct(?string $columnName = null, ?int $feeDefinitionId = null)
    {
        $this
            ->setColumnName($columnName)
            ->setFeeDefinitionId($feeDefinitionId);
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementCsvColumnDTO
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
     * Get feeDefinitionId value
     * @return int|null
     */
    public function getFeeDefinitionId(): ?int
    {
        return $this->feeDefinitionId;
    }
    /**
     * Set feeDefinitionId value
     * @param int $feeDefinitionId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementCsvColumnDTO
     */
    public function setFeeDefinitionId(?int $feeDefinitionId = null): self
    {
        // validation for constraint: int
        if (!is_null($feeDefinitionId) && !(is_int($feeDefinitionId) || ctype_digit($feeDefinitionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feeDefinitionId, true), gettype($feeDefinitionId)), __LINE__);
        }
        $this->feeDefinitionId = $feeDefinitionId;
        
        return $this;
    }
}
