<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportChangedCustomersLogResultDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExportChangedCustomersLogResultDTO extends AbstractStructBase
{
    /**
     * The changeId
     * @var int|null
     */
    protected ?int $changeId = null;
    /**
     * The firstRequestTime
     * @var string|null
     */
    protected ?string $firstRequestTime = null;
    /**
     * The isExported
     * @var bool|null
     */
    protected ?bool $isExported = null;
    /**
     * The isIgnored
     * @var bool|null
     */
    protected ?bool $isIgnored = null;
    /**
     * The lastRequestTime
     * @var string|null
     */
    protected ?string $lastRequestTime = null;
    /**
     * The requestTime
     * @var string|null
     */
    protected ?string $requestTime = null;
    /**
     * The responseCode
     * @var int|null
     */
    protected ?int $responseCode = null;
    /**
     * The systemName
     * @var string|null
     */
    protected ?string $systemName = null;
    /**
     * The tryCount
     * @var int|null
     */
    protected ?int $tryCount = null;
    /**
     * Constructor method for ExportChangedCustomersLogResultDTO
     * @uses ExportChangedCustomersLogResultDTO::setChangeId()
     * @uses ExportChangedCustomersLogResultDTO::setFirstRequestTime()
     * @uses ExportChangedCustomersLogResultDTO::setIsExported()
     * @uses ExportChangedCustomersLogResultDTO::setIsIgnored()
     * @uses ExportChangedCustomersLogResultDTO::setLastRequestTime()
     * @uses ExportChangedCustomersLogResultDTO::setRequestTime()
     * @uses ExportChangedCustomersLogResultDTO::setResponseCode()
     * @uses ExportChangedCustomersLogResultDTO::setSystemName()
     * @uses ExportChangedCustomersLogResultDTO::setTryCount()
     * @param int $changeId
     * @param string $firstRequestTime
     * @param bool $isExported
     * @param bool $isIgnored
     * @param string $lastRequestTime
     * @param string $requestTime
     * @param int $responseCode
     * @param string $systemName
     * @param int $tryCount
     */
    public function __construct(?int $changeId = null, ?string $firstRequestTime = null, ?bool $isExported = null, ?bool $isIgnored = null, ?string $lastRequestTime = null, ?string $requestTime = null, ?int $responseCode = null, ?string $systemName = null, ?int $tryCount = null)
    {
        $this
            ->setChangeId($changeId)
            ->setFirstRequestTime($firstRequestTime)
            ->setIsExported($isExported)
            ->setIsIgnored($isIgnored)
            ->setLastRequestTime($lastRequestTime)
            ->setRequestTime($requestTime)
            ->setResponseCode($responseCode)
            ->setSystemName($systemName)
            ->setTryCount($tryCount);
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
     * @return \Pggns\MidocoApi\Mis\StructType\ExportChangedCustomersLogResultDTO
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
     * Get firstRequestTime value
     * @return string|null
     */
    public function getFirstRequestTime(): ?string
    {
        return $this->firstRequestTime;
    }
    /**
     * Set firstRequestTime value
     * @param string $firstRequestTime
     * @return \Pggns\MidocoApi\Mis\StructType\ExportChangedCustomersLogResultDTO
     */
    public function setFirstRequestTime(?string $firstRequestTime = null): self
    {
        // validation for constraint: string
        if (!is_null($firstRequestTime) && !is_string($firstRequestTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstRequestTime, true), gettype($firstRequestTime)), __LINE__);
        }
        $this->firstRequestTime = $firstRequestTime;
        
        return $this;
    }
    /**
     * Get isExported value
     * @return bool|null
     */
    public function getIsExported(): ?bool
    {
        return $this->isExported;
    }
    /**
     * Set isExported value
     * @param bool $isExported
     * @return \Pggns\MidocoApi\Mis\StructType\ExportChangedCustomersLogResultDTO
     */
    public function setIsExported(?bool $isExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExported) && !is_bool($isExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExported, true), gettype($isExported)), __LINE__);
        }
        $this->isExported = $isExported;
        
        return $this;
    }
    /**
     * Get isIgnored value
     * @return bool|null
     */
    public function getIsIgnored(): ?bool
    {
        return $this->isIgnored;
    }
    /**
     * Set isIgnored value
     * @param bool $isIgnored
     * @return \Pggns\MidocoApi\Mis\StructType\ExportChangedCustomersLogResultDTO
     */
    public function setIsIgnored(?bool $isIgnored = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isIgnored) && !is_bool($isIgnored)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isIgnored, true), gettype($isIgnored)), __LINE__);
        }
        $this->isIgnored = $isIgnored;
        
        return $this;
    }
    /**
     * Get lastRequestTime value
     * @return string|null
     */
    public function getLastRequestTime(): ?string
    {
        return $this->lastRequestTime;
    }
    /**
     * Set lastRequestTime value
     * @param string $lastRequestTime
     * @return \Pggns\MidocoApi\Mis\StructType\ExportChangedCustomersLogResultDTO
     */
    public function setLastRequestTime(?string $lastRequestTime = null): self
    {
        // validation for constraint: string
        if (!is_null($lastRequestTime) && !is_string($lastRequestTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastRequestTime, true), gettype($lastRequestTime)), __LINE__);
        }
        $this->lastRequestTime = $lastRequestTime;
        
        return $this;
    }
    /**
     * Get requestTime value
     * @return string|null
     */
    public function getRequestTime(): ?string
    {
        return $this->requestTime;
    }
    /**
     * Set requestTime value
     * @param string $requestTime
     * @return \Pggns\MidocoApi\Mis\StructType\ExportChangedCustomersLogResultDTO
     */
    public function setRequestTime(?string $requestTime = null): self
    {
        // validation for constraint: string
        if (!is_null($requestTime) && !is_string($requestTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requestTime, true), gettype($requestTime)), __LINE__);
        }
        $this->requestTime = $requestTime;
        
        return $this;
    }
    /**
     * Get responseCode value
     * @return int|null
     */
    public function getResponseCode(): ?int
    {
        return $this->responseCode;
    }
    /**
     * Set responseCode value
     * @param int $responseCode
     * @return \Pggns\MidocoApi\Mis\StructType\ExportChangedCustomersLogResultDTO
     */
    public function setResponseCode(?int $responseCode = null): self
    {
        // validation for constraint: int
        if (!is_null($responseCode) && !(is_int($responseCode) || ctype_digit($responseCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($responseCode, true), gettype($responseCode)), __LINE__);
        }
        $this->responseCode = $responseCode;
        
        return $this;
    }
    /**
     * Get systemName value
     * @return string|null
     */
    public function getSystemName(): ?string
    {
        return $this->systemName;
    }
    /**
     * Set systemName value
     * @param string $systemName
     * @return \Pggns\MidocoApi\Mis\StructType\ExportChangedCustomersLogResultDTO
     */
    public function setSystemName(?string $systemName = null): self
    {
        // validation for constraint: string
        if (!is_null($systemName) && !is_string($systemName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($systemName, true), gettype($systemName)), __LINE__);
        }
        $this->systemName = $systemName;
        
        return $this;
    }
    /**
     * Get tryCount value
     * @return int|null
     */
    public function getTryCount(): ?int
    {
        return $this->tryCount;
    }
    /**
     * Set tryCount value
     * @param int $tryCount
     * @return \Pggns\MidocoApi\Mis\StructType\ExportChangedCustomersLogResultDTO
     */
    public function setTryCount(?int $tryCount = null): self
    {
        // validation for constraint: int
        if (!is_null($tryCount) && !(is_int($tryCount) || ctype_digit($tryCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tryCount, true), gettype($tryCount)), __LINE__);
        }
        $this->tryCount = $tryCount;
        
        return $this;
    }
}
