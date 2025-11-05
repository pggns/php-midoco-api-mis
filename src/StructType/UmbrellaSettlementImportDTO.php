<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementImportDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementImportDTO extends AbstractStructBase
{
    /**
     * The added
     * @var string|null
     */
    protected ?string $added = null;
    /**
     * The addedBy
     * @var int|null
     */
    protected ?int $addedBy = null;
    /**
     * The charset
     * @var string|null
     */
    protected ?string $charset = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
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
     * The filename
     * @var string|null
     */
    protected ?string $filename = null;
    /**
     * The importId
     * @var int|null
     */
    protected ?int $importId = null;
    /**
     * The modified
     * @var string|null
     */
    protected ?string $modified = null;
    /**
     * The modifiedBy
     * @var int|null
     */
    protected ?int $modifiedBy = null;
    /**
     * The parsed
     * @var string|null
     */
    protected ?string $parsed = null;
    /**
     * The parsedBy
     * @var int|null
     */
    protected ?int $parsedBy = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * The settlementMonthId
     * @var int|null
     */
    protected ?int $settlementMonthId = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The validated
     * @var string|null
     */
    protected ?string $validated = null;
    /**
     * The validatedBy
     * @var int|null
     */
    protected ?int $validatedBy = null;
    /**
     * Constructor method for UmbrellaSettlementImportDTO
     * @uses UmbrellaSettlementImportDTO::setAdded()
     * @uses UmbrellaSettlementImportDTO::setAddedBy()
     * @uses UmbrellaSettlementImportDTO::setCharset()
     * @uses UmbrellaSettlementImportDTO::setCustomerId()
     * @uses UmbrellaSettlementImportDTO::setDescription()
     * @uses UmbrellaSettlementImportDTO::setErrorArgs()
     * @uses UmbrellaSettlementImportDTO::setErrorCode()
     * @uses UmbrellaSettlementImportDTO::setFilename()
     * @uses UmbrellaSettlementImportDTO::setImportId()
     * @uses UmbrellaSettlementImportDTO::setModified()
     * @uses UmbrellaSettlementImportDTO::setModifiedBy()
     * @uses UmbrellaSettlementImportDTO::setParsed()
     * @uses UmbrellaSettlementImportDTO::setParsedBy()
     * @uses UmbrellaSettlementImportDTO::setRepositoryId()
     * @uses UmbrellaSettlementImportDTO::setSettlementMonthId()
     * @uses UmbrellaSettlementImportDTO::setType()
     * @uses UmbrellaSettlementImportDTO::setValidated()
     * @uses UmbrellaSettlementImportDTO::setValidatedBy()
     * @param string $added
     * @param int $addedBy
     * @param string $charset
     * @param int $customerId
     * @param string $description
     * @param string $errorArgs
     * @param string $errorCode
     * @param string $filename
     * @param int $importId
     * @param string $modified
     * @param int $modifiedBy
     * @param string $parsed
     * @param int $parsedBy
     * @param int $repositoryId
     * @param int $settlementMonthId
     * @param string $type
     * @param string $validated
     * @param int $validatedBy
     */
    public function __construct(?string $added = null, ?int $addedBy = null, ?string $charset = null, ?int $customerId = null, ?string $description = null, ?string $errorArgs = null, ?string $errorCode = null, ?string $filename = null, ?int $importId = null, ?string $modified = null, ?int $modifiedBy = null, ?string $parsed = null, ?int $parsedBy = null, ?int $repositoryId = null, ?int $settlementMonthId = null, ?string $type = null, ?string $validated = null, ?int $validatedBy = null)
    {
        $this
            ->setAdded($added)
            ->setAddedBy($addedBy)
            ->setCharset($charset)
            ->setCustomerId($customerId)
            ->setDescription($description)
            ->setErrorArgs($errorArgs)
            ->setErrorCode($errorCode)
            ->setFilename($filename)
            ->setImportId($importId)
            ->setModified($modified)
            ->setModifiedBy($modifiedBy)
            ->setParsed($parsed)
            ->setParsedBy($parsedBy)
            ->setRepositoryId($repositoryId)
            ->setSettlementMonthId($settlementMonthId)
            ->setType($type)
            ->setValidated($validated)
            ->setValidatedBy($validatedBy);
    }
    /**
     * Get added value
     * @return string|null
     */
    public function getAdded(): ?string
    {
        return $this->added;
    }
    /**
     * Set added value
     * @param string $added
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportDTO
     */
    public function setAdded(?string $added = null): self
    {
        // validation for constraint: string
        if (!is_null($added) && !is_string($added)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($added, true), gettype($added)), __LINE__);
        }
        $this->added = $added;
        
        return $this;
    }
    /**
     * Get addedBy value
     * @return int|null
     */
    public function getAddedBy(): ?int
    {
        return $this->addedBy;
    }
    /**
     * Set addedBy value
     * @param int $addedBy
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportDTO
     */
    public function setAddedBy(?int $addedBy = null): self
    {
        // validation for constraint: int
        if (!is_null($addedBy) && !(is_int($addedBy) || ctype_digit($addedBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addedBy, true), gettype($addedBy)), __LINE__);
        }
        $this->addedBy = $addedBy;
        
        return $this;
    }
    /**
     * Get charset value
     * @return string|null
     */
    public function getCharset(): ?string
    {
        return $this->charset;
    }
    /**
     * Set charset value
     * @param string $charset
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportDTO
     */
    public function setCharset(?string $charset = null): self
    {
        // validation for constraint: string
        if (!is_null($charset) && !is_string($charset)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($charset, true), gettype($charset)), __LINE__);
        }
        $this->charset = $charset;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportDTO
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
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportDTO
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
     * Get filename value
     * @return string|null
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }
    /**
     * Set filename value
     * @param string $filename
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportDTO
     */
    public function setFilename(?string $filename = null): self
    {
        // validation for constraint: string
        if (!is_null($filename) && !is_string($filename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filename, true), gettype($filename)), __LINE__);
        }
        $this->filename = $filename;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportDTO
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
     * Get modified value
     * @return string|null
     */
    public function getModified(): ?string
    {
        return $this->modified;
    }
    /**
     * Set modified value
     * @param string $modified
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportDTO
     */
    public function setModified(?string $modified = null): self
    {
        // validation for constraint: string
        if (!is_null($modified) && !is_string($modified)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modified, true), gettype($modified)), __LINE__);
        }
        $this->modified = $modified;
        
        return $this;
    }
    /**
     * Get modifiedBy value
     * @return int|null
     */
    public function getModifiedBy(): ?int
    {
        return $this->modifiedBy;
    }
    /**
     * Set modifiedBy value
     * @param int $modifiedBy
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportDTO
     */
    public function setModifiedBy(?int $modifiedBy = null): self
    {
        // validation for constraint: int
        if (!is_null($modifiedBy) && !(is_int($modifiedBy) || ctype_digit($modifiedBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifiedBy, true), gettype($modifiedBy)), __LINE__);
        }
        $this->modifiedBy = $modifiedBy;
        
        return $this;
    }
    /**
     * Get parsed value
     * @return string|null
     */
    public function getParsed(): ?string
    {
        return $this->parsed;
    }
    /**
     * Set parsed value
     * @param string $parsed
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportDTO
     */
    public function setParsed(?string $parsed = null): self
    {
        // validation for constraint: string
        if (!is_null($parsed) && !is_string($parsed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parsed, true), gettype($parsed)), __LINE__);
        }
        $this->parsed = $parsed;
        
        return $this;
    }
    /**
     * Get parsedBy value
     * @return int|null
     */
    public function getParsedBy(): ?int
    {
        return $this->parsedBy;
    }
    /**
     * Set parsedBy value
     * @param int $parsedBy
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportDTO
     */
    public function setParsedBy(?int $parsedBy = null): self
    {
        // validation for constraint: int
        if (!is_null($parsedBy) && !(is_int($parsedBy) || ctype_digit($parsedBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parsedBy, true), gettype($parsedBy)), __LINE__);
        }
        $this->parsedBy = $parsedBy;
        
        return $this;
    }
    /**
     * Get repositoryId value
     * @return int|null
     */
    public function getRepositoryId(): ?int
    {
        return $this->repositoryId;
    }
    /**
     * Set repositoryId value
     * @param int $repositoryId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportDTO
     */
    public function setRepositoryId(?int $repositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($repositoryId) && !(is_int($repositoryId) || ctype_digit($repositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repositoryId, true), gettype($repositoryId)), __LINE__);
        }
        $this->repositoryId = $repositoryId;
        
        return $this;
    }
    /**
     * Get settlementMonthId value
     * @return int|null
     */
    public function getSettlementMonthId(): ?int
    {
        return $this->settlementMonthId;
    }
    /**
     * Set settlementMonthId value
     * @param int $settlementMonthId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportDTO
     */
    public function setSettlementMonthId(?int $settlementMonthId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementMonthId) && !(is_int($settlementMonthId) || ctype_digit($settlementMonthId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementMonthId, true), gettype($settlementMonthId)), __LINE__);
        }
        $this->settlementMonthId = $settlementMonthId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportDTO
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
     * Get validated value
     * @return string|null
     */
    public function getValidated(): ?string
    {
        return $this->validated;
    }
    /**
     * Set validated value
     * @param string $validated
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportDTO
     */
    public function setValidated(?string $validated = null): self
    {
        // validation for constraint: string
        if (!is_null($validated) && !is_string($validated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validated, true), gettype($validated)), __LINE__);
        }
        $this->validated = $validated;
        
        return $this;
    }
    /**
     * Get validatedBy value
     * @return int|null
     */
    public function getValidatedBy(): ?int
    {
        return $this->validatedBy;
    }
    /**
     * Set validatedBy value
     * @param int $validatedBy
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementImportDTO
     */
    public function setValidatedBy(?int $validatedBy = null): self
    {
        // validation for constraint: int
        if (!is_null($validatedBy) && !(is_int($validatedBy) || ctype_digit($validatedBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($validatedBy, true), gettype($validatedBy)), __LINE__);
        }
        $this->validatedBy = $validatedBy;
        
        return $this;
    }
}
