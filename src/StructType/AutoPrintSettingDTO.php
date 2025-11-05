<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AutoPrintSettingDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AutoPrintSettingDTO extends AbstractStructBase
{
    /**
     * The documentType
     * @var string|null
     */
    protected ?string $documentType = null;
    /**
     * The modifyDate
     * @var string|null
     */
    protected ?string $modifyDate = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The printDateInterval
     * @var int|null
     */
    protected ?int $printDateInterval = null;
    /**
     * The printDateRelation
     * @var int|null
     */
    protected ?int $printDateRelation = null;
    /**
     * The printScheduleTime
     * @var string|null
     */
    protected ?string $printScheduleTime = null;
    /**
     * The settingDescription
     * @var string|null
     */
    protected ?string $settingDescription = null;
    /**
     * The settingId
     * @var string|null
     */
    protected ?string $settingId = null;
    /**
     * The unitOfTimeValue
     * @var int|null
     */
    protected ?int $unitOfTimeValue = null;
    /**
     * Constructor method for AutoPrintSettingDTO
     * @uses AutoPrintSettingDTO::setDocumentType()
     * @uses AutoPrintSettingDTO::setModifyDate()
     * @uses AutoPrintSettingDTO::setModifyUser()
     * @uses AutoPrintSettingDTO::setPrintDateInterval()
     * @uses AutoPrintSettingDTO::setPrintDateRelation()
     * @uses AutoPrintSettingDTO::setPrintScheduleTime()
     * @uses AutoPrintSettingDTO::setSettingDescription()
     * @uses AutoPrintSettingDTO::setSettingId()
     * @uses AutoPrintSettingDTO::setUnitOfTimeValue()
     * @param string $documentType
     * @param string $modifyDate
     * @param int $modifyUser
     * @param int $printDateInterval
     * @param int $printDateRelation
     * @param string $printScheduleTime
     * @param string $settingDescription
     * @param string $settingId
     * @param int $unitOfTimeValue
     */
    public function __construct(?string $documentType = null, ?string $modifyDate = null, ?int $modifyUser = null, ?int $printDateInterval = null, ?int $printDateRelation = null, ?string $printScheduleTime = null, ?string $settingDescription = null, ?string $settingId = null, ?int $unitOfTimeValue = null)
    {
        $this
            ->setDocumentType($documentType)
            ->setModifyDate($modifyDate)
            ->setModifyUser($modifyUser)
            ->setPrintDateInterval($printDateInterval)
            ->setPrintDateRelation($printDateRelation)
            ->setPrintScheduleTime($printScheduleTime)
            ->setSettingDescription($settingDescription)
            ->setSettingId($settingId)
            ->setUnitOfTimeValue($unitOfTimeValue);
    }
    /**
     * Get documentType value
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }
    /**
     * Set documentType value
     * @param string $documentType
     * @return \Pggns\MidocoApi\Mis\StructType\AutoPrintSettingDTO
     */
    public function setDocumentType(?string $documentType = null): self
    {
        // validation for constraint: string
        if (!is_null($documentType) && !is_string($documentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentType, true), gettype($documentType)), __LINE__);
        }
        $this->documentType = $documentType;
        
        return $this;
    }
    /**
     * Get modifyDate value
     * @return string|null
     */
    public function getModifyDate(): ?string
    {
        return $this->modifyDate;
    }
    /**
     * Set modifyDate value
     * @param string $modifyDate
     * @return \Pggns\MidocoApi\Mis\StructType\AutoPrintSettingDTO
     */
    public function setModifyDate(?string $modifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyDate, true), gettype($modifyDate)), __LINE__);
        }
        $this->modifyDate = $modifyDate;
        
        return $this;
    }
    /**
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\Mis\StructType\AutoPrintSettingDTO
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
        return $this;
    }
    /**
     * Get printDateInterval value
     * @return int|null
     */
    public function getPrintDateInterval(): ?int
    {
        return $this->printDateInterval;
    }
    /**
     * Set printDateInterval value
     * @param int $printDateInterval
     * @return \Pggns\MidocoApi\Mis\StructType\AutoPrintSettingDTO
     */
    public function setPrintDateInterval(?int $printDateInterval = null): self
    {
        // validation for constraint: int
        if (!is_null($printDateInterval) && !(is_int($printDateInterval) || ctype_digit($printDateInterval))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printDateInterval, true), gettype($printDateInterval)), __LINE__);
        }
        $this->printDateInterval = $printDateInterval;
        
        return $this;
    }
    /**
     * Get printDateRelation value
     * @return int|null
     */
    public function getPrintDateRelation(): ?int
    {
        return $this->printDateRelation;
    }
    /**
     * Set printDateRelation value
     * @param int $printDateRelation
     * @return \Pggns\MidocoApi\Mis\StructType\AutoPrintSettingDTO
     */
    public function setPrintDateRelation(?int $printDateRelation = null): self
    {
        // validation for constraint: int
        if (!is_null($printDateRelation) && !(is_int($printDateRelation) || ctype_digit($printDateRelation))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printDateRelation, true), gettype($printDateRelation)), __LINE__);
        }
        $this->printDateRelation = $printDateRelation;
        
        return $this;
    }
    /**
     * Get printScheduleTime value
     * @return string|null
     */
    public function getPrintScheduleTime(): ?string
    {
        return $this->printScheduleTime;
    }
    /**
     * Set printScheduleTime value
     * @param string $printScheduleTime
     * @return \Pggns\MidocoApi\Mis\StructType\AutoPrintSettingDTO
     */
    public function setPrintScheduleTime(?string $printScheduleTime = null): self
    {
        // validation for constraint: string
        if (!is_null($printScheduleTime) && !is_string($printScheduleTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printScheduleTime, true), gettype($printScheduleTime)), __LINE__);
        }
        $this->printScheduleTime = $printScheduleTime;
        
        return $this;
    }
    /**
     * Get settingDescription value
     * @return string|null
     */
    public function getSettingDescription(): ?string
    {
        return $this->settingDescription;
    }
    /**
     * Set settingDescription value
     * @param string $settingDescription
     * @return \Pggns\MidocoApi\Mis\StructType\AutoPrintSettingDTO
     */
    public function setSettingDescription(?string $settingDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($settingDescription) && !is_string($settingDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settingDescription, true), gettype($settingDescription)), __LINE__);
        }
        $this->settingDescription = $settingDescription;
        
        return $this;
    }
    /**
     * Get settingId value
     * @return string|null
     */
    public function getSettingId(): ?string
    {
        return $this->settingId;
    }
    /**
     * Set settingId value
     * @param string $settingId
     * @return \Pggns\MidocoApi\Mis\StructType\AutoPrintSettingDTO
     */
    public function setSettingId(?string $settingId = null): self
    {
        // validation for constraint: string
        if (!is_null($settingId) && !is_string($settingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settingId, true), gettype($settingId)), __LINE__);
        }
        $this->settingId = $settingId;
        
        return $this;
    }
    /**
     * Get unitOfTimeValue value
     * @return int|null
     */
    public function getUnitOfTimeValue(): ?int
    {
        return $this->unitOfTimeValue;
    }
    /**
     * Set unitOfTimeValue value
     * @param int $unitOfTimeValue
     * @return \Pggns\MidocoApi\Mis\StructType\AutoPrintSettingDTO
     */
    public function setUnitOfTimeValue(?int $unitOfTimeValue = null): self
    {
        // validation for constraint: int
        if (!is_null($unitOfTimeValue) && !(is_int($unitOfTimeValue) || ctype_digit($unitOfTimeValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($unitOfTimeValue, true), gettype($unitOfTimeValue)), __LINE__);
        }
        $this->unitOfTimeValue = $unitOfTimeValue;
        
        return $this;
    }
}
