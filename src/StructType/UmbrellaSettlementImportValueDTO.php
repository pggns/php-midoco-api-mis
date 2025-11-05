<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementImportValueDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementImportValueDTO extends AbstractStructBase
{
    /**
     * The amount
     * @var int|null
     */
    protected ?int $amount = null;
    /**
     * The columnNo
     * @var int|null
     */
    protected ?int $columnNo = null;
    /**
     * The errorArgs
     * @var string|null
     */
    protected ?string $errorArgs = null;
    /**
     * The errorCode
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The feeId
     * @var int|null
     */
    protected ?int $feeId = null;
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
     * The lineNo
     * @var int|null
     */
    protected ?int $lineNo = null;
    /**
     * The textValue
     * @var string|null
     */
    protected ?string $textValue = null;
    /**
     * Constructor method for UmbrellaSettlementImportValueDTO
     * @uses UmbrellaSettlementImportValueDTO::setAmount()
     * @uses UmbrellaSettlementImportValueDTO::setColumnNo()
     * @uses UmbrellaSettlementImportValueDTO::setErrorArgs()
     * @uses UmbrellaSettlementImportValueDTO::setErrorCode()
     * @uses UmbrellaSettlementImportValueDTO::setFeeId()
     * @uses UmbrellaSettlementImportValueDTO::setIgnored()
     * @uses UmbrellaSettlementImportValueDTO::setImportId()
     * @uses UmbrellaSettlementImportValueDTO::setLineNo()
     * @uses UmbrellaSettlementImportValueDTO::setTextValue()
     * @param int $amount
     * @param int $columnNo
     * @param string $errorArgs
     * @param string $errorCode
     * @param int $feeId
     * @param bool $ignored
     * @param int $importId
     * @param int $lineNo
     * @param string $textValue
     */
    public function __construct(?int $amount = null, ?int $columnNo = null, ?string $errorArgs = null, ?string $errorCode = null, ?int $feeId = null, ?bool $ignored = null, ?int $importId = null, ?int $lineNo = null, ?string $textValue = null)
    {
        $this
            ->setAmount($amount)
            ->setColumnNo($columnNo)
            ->setErrorArgs($errorArgs)
            ->setErrorCode($errorCode)
            ->setFeeId($feeId)
            ->setIgnored($ignored)
            ->setImportId($importId)
            ->setLineNo($lineNo)
            ->setTextValue($textValue);
    }
    /**
     * Get amount value
     * @return int|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param int $amount
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportValueDTO
     */
    public function setAmount(?int $amount = null): self
    {
        // validation for constraint: int
        if (!is_null($amount) && !(is_int($amount) || ctype_digit($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportValueDTO
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
     * Get errorArgs value
     * @return string|null
     */
    public function getErrorArgs(): ?string
    {
        return $this->errorArgs;
    }
    /**
     * Set errorArgs value
     * @param string $errorArgs
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportValueDTO
     */
    public function setErrorArgs(?string $errorArgs = null): self
    {
        // validation for constraint: string
        if (!is_null($errorArgs) && !is_string($errorArgs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorArgs, true), gettype($errorArgs)), __LINE__);
        }
        $this->errorArgs = $errorArgs;
        
        return $this;
    }
    /**
     * Get errorCode value
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param string $errorCode
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportValueDTO
     */
    public function setErrorCode(?string $errorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get feeId value
     * @return int|null
     */
    public function getFeeId(): ?int
    {
        return $this->feeId;
    }
    /**
     * Set feeId value
     * @param int $feeId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportValueDTO
     */
    public function setFeeId(?int $feeId = null): self
    {
        // validation for constraint: int
        if (!is_null($feeId) && !(is_int($feeId) || ctype_digit($feeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feeId, true), gettype($feeId)), __LINE__);
        }
        $this->feeId = $feeId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportValueDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportValueDTO
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
    /**
     * Get lineNo value
     * @return int|null
     */
    public function getLineNo(): ?int
    {
        return $this->lineNo;
    }
    /**
     * Set lineNo value
     * @param int $lineNo
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportValueDTO
     */
    public function setLineNo(?int $lineNo = null): self
    {
        // validation for constraint: int
        if (!is_null($lineNo) && !(is_int($lineNo) || ctype_digit($lineNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lineNo, true), gettype($lineNo)), __LINE__);
        }
        $this->lineNo = $lineNo;
        
        return $this;
    }
    /**
     * Get textValue value
     * @return string|null
     */
    public function getTextValue(): ?string
    {
        return $this->textValue;
    }
    /**
     * Set textValue value
     * @param string $textValue
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportValueDTO
     */
    public function setTextValue(?string $textValue = null): self
    {
        // validation for constraint: string
        if (!is_null($textValue) && !is_string($textValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($textValue, true), gettype($textValue)), __LINE__);
        }
        $this->textValue = $textValue;
        
        return $this;
    }
}
