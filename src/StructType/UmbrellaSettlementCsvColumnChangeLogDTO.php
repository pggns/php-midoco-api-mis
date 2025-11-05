<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementCsvColumnChangeLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementCsvColumnChangeLogDTO extends AbstractStructBase
{
    /**
     * The action
     * @var string|null
     */
    protected ?string $action = null;
    /**
     * The changeId
     * @var int|null
     */
    protected ?int $changeId = null;
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
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for UmbrellaSettlementCsvColumnChangeLogDTO
     * @uses UmbrellaSettlementCsvColumnChangeLogDTO::setAction()
     * @uses UmbrellaSettlementCsvColumnChangeLogDTO::setChangeId()
     * @uses UmbrellaSettlementCsvColumnChangeLogDTO::setColumnName()
     * @uses UmbrellaSettlementCsvColumnChangeLogDTO::setFeeDefinitionId()
     * @uses UmbrellaSettlementCsvColumnChangeLogDTO::setTimestamp()
     * @uses UmbrellaSettlementCsvColumnChangeLogDTO::setUserId()
     * @param string $action
     * @param int $changeId
     * @param string $columnName
     * @param int $feeDefinitionId
     * @param string $timestamp
     * @param int $userId
     */
    public function __construct(?string $action = null, ?int $changeId = null, ?string $columnName = null, ?int $feeDefinitionId = null, ?string $timestamp = null, ?int $userId = null)
    {
        $this
            ->setAction($action)
            ->setChangeId($changeId)
            ->setColumnName($columnName)
            ->setFeeDefinitionId($feeDefinitionId)
            ->setTimestamp($timestamp)
            ->setUserId($userId);
    }
    /**
     * Get action value
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }
    /**
     * Set action value
     * @param string $action
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementCsvColumnChangeLogDTO
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($action, true), gettype($action)), __LINE__);
        }
        $this->action = $action;
        
        return $this;
    }
    /**
     * Get changeId value
     * @return int|null
     */
    public function getChangeId(): ?int
    {
        return $this->changeId;
    }
    /**
     * Set changeId value
     * @param int $changeId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementCsvColumnChangeLogDTO
     */
    public function setChangeId(?int $changeId = null): self
    {
        // validation for constraint: int
        if (!is_null($changeId) && !(is_int($changeId) || ctype_digit($changeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($changeId, true), gettype($changeId)), __LINE__);
        }
        $this->changeId = $changeId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementCsvColumnChangeLogDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementCsvColumnChangeLogDTO
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
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementCsvColumnChangeLogDTO
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        
        return $this;
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementCsvColumnChangeLogDTO
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
}
