<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementImportLineDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementImportLineDTO extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
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
     * The excluded
     * @var bool|null
     */
    protected ?bool $excluded = null;
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
     * The sortKey
     * @var string|null
     */
    protected ?string $sortKey = null;
    /**
     * Constructor method for UmbrellaSettlementImportLineDTO
     * @uses UmbrellaSettlementImportLineDTO::setCustomerId()
     * @uses UmbrellaSettlementImportLineDTO::setErrorArgs()
     * @uses UmbrellaSettlementImportLineDTO::setErrorCode()
     * @uses UmbrellaSettlementImportLineDTO::setExcluded()
     * @uses UmbrellaSettlementImportLineDTO::setIgnored()
     * @uses UmbrellaSettlementImportLineDTO::setImportId()
     * @uses UmbrellaSettlementImportLineDTO::setLineNo()
     * @uses UmbrellaSettlementImportLineDTO::setSortKey()
     * @param int $customerId
     * @param string $errorArgs
     * @param string $errorCode
     * @param bool $excluded
     * @param bool $ignored
     * @param int $importId
     * @param int $lineNo
     * @param string $sortKey
     */
    public function __construct(?int $customerId = null, ?string $errorArgs = null, ?string $errorCode = null, ?bool $excluded = null, ?bool $ignored = null, ?int $importId = null, ?int $lineNo = null, ?string $sortKey = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setErrorArgs($errorArgs)
            ->setErrorCode($errorCode)
            ->setExcluded($excluded)
            ->setIgnored($ignored)
            ->setImportId($importId)
            ->setLineNo($lineNo)
            ->setSortKey($sortKey);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportLineDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportLineDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportLineDTO
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
     * Get excluded value
     * @return bool|null
     */
    public function getExcluded(): ?bool
    {
        return $this->excluded;
    }
    /**
     * Set excluded value
     * @param bool $excluded
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportLineDTO
     */
    public function setExcluded(?bool $excluded = null): self
    {
        // validation for constraint: boolean
        if (!is_null($excluded) && !is_bool($excluded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($excluded, true), gettype($excluded)), __LINE__);
        }
        $this->excluded = $excluded;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportLineDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportLineDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportLineDTO
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
     * Get sortKey value
     * @return string|null
     */
    public function getSortKey(): ?string
    {
        return $this->sortKey;
    }
    /**
     * Set sortKey value
     * @param string $sortKey
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportLineDTO
     */
    public function setSortKey(?string $sortKey = null): self
    {
        // validation for constraint: string
        if (!is_null($sortKey) && !is_string($sortKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sortKey, true), gettype($sortKey)), __LINE__);
        }
        $this->sortKey = $sortKey;
        
        return $this;
    }
}
