<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UmbrellaSettlementPositionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UmbrellaSettlementPositionDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var int|null
     */
    protected ?int $accountId = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The bexioId
     * @var int|null
     */
    protected ?int $bexioId = null;
    /**
     * The bexioPosition
     * @var string|null
     */
    protected ?string $bexioPosition = null;
    /**
     * The created
     * @var string|null
     */
    protected ?string $created = null;
    /**
     * The createdBy
     * @var int|null
     */
    protected ?int $createdBy = null;
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
     * The discountPercent
     * @var float|null
     */
    protected ?float $discountPercent = null;
    /**
     * The feeId
     * @var int|null
     */
    protected ?int $feeId = null;
    /**
     * The parentPosition
     * @var int|null
     */
    protected ?int $parentPosition = null;
    /**
     * The positionId
     * @var int|null
     */
    protected ?int $positionId = null;
    /**
     * The positionType
     * @var string|null
     */
    protected ?string $positionType = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The sortPosition
     * @var int|null
     */
    protected ?int $sortPosition = null;
    /**
     * The taxId
     * @var int|null
     */
    protected ?int $taxId = null;
    /**
     * The title
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The unitId
     * @var int|null
     */
    protected ?int $unitId = null;
    /**
     * The unitPrice
     * @var float|null
     */
    protected ?float $unitPrice = null;
    /**
     * The uploaded
     * @var string|null
     */
    protected ?string $uploaded = null;
    /**
     * The uploadedBy
     * @var int|null
     */
    protected ?int $uploadedBy = null;
    /**
     * Constructor method for UmbrellaSettlementPositionDTO
     * @uses UmbrellaSettlementPositionDTO::setAccountId()
     * @uses UmbrellaSettlementPositionDTO::setAmount()
     * @uses UmbrellaSettlementPositionDTO::setBexioId()
     * @uses UmbrellaSettlementPositionDTO::setBexioPosition()
     * @uses UmbrellaSettlementPositionDTO::setCreated()
     * @uses UmbrellaSettlementPositionDTO::setCreatedBy()
     * @uses UmbrellaSettlementPositionDTO::setCustomerId()
     * @uses UmbrellaSettlementPositionDTO::setDescription()
     * @uses UmbrellaSettlementPositionDTO::setDiscountPercent()
     * @uses UmbrellaSettlementPositionDTO::setFeeId()
     * @uses UmbrellaSettlementPositionDTO::setParentPosition()
     * @uses UmbrellaSettlementPositionDTO::setPositionId()
     * @uses UmbrellaSettlementPositionDTO::setPositionType()
     * @uses UmbrellaSettlementPositionDTO::setSettlementId()
     * @uses UmbrellaSettlementPositionDTO::setSortPosition()
     * @uses UmbrellaSettlementPositionDTO::setTaxId()
     * @uses UmbrellaSettlementPositionDTO::setTitle()
     * @uses UmbrellaSettlementPositionDTO::setUnitId()
     * @uses UmbrellaSettlementPositionDTO::setUnitPrice()
     * @uses UmbrellaSettlementPositionDTO::setUploaded()
     * @uses UmbrellaSettlementPositionDTO::setUploadedBy()
     * @param int $accountId
     * @param float $amount
     * @param int $bexioId
     * @param string $bexioPosition
     * @param string $created
     * @param int $createdBy
     * @param int $customerId
     * @param string $description
     * @param float $discountPercent
     * @param int $feeId
     * @param int $parentPosition
     * @param int $positionId
     * @param string $positionType
     * @param int $settlementId
     * @param int $sortPosition
     * @param int $taxId
     * @param string $title
     * @param int $unitId
     * @param float $unitPrice
     * @param string $uploaded
     * @param int $uploadedBy
     */
    public function __construct(?int $accountId = null, ?float $amount = null, ?int $bexioId = null, ?string $bexioPosition = null, ?string $created = null, ?int $createdBy = null, ?int $customerId = null, ?string $description = null, ?float $discountPercent = null, ?int $feeId = null, ?int $parentPosition = null, ?int $positionId = null, ?string $positionType = null, ?int $settlementId = null, ?int $sortPosition = null, ?int $taxId = null, ?string $title = null, ?int $unitId = null, ?float $unitPrice = null, ?string $uploaded = null, ?int $uploadedBy = null)
    {
        $this
            ->setAccountId($accountId)
            ->setAmount($amount)
            ->setBexioId($bexioId)
            ->setBexioPosition($bexioPosition)
            ->setCreated($created)
            ->setCreatedBy($createdBy)
            ->setCustomerId($customerId)
            ->setDescription($description)
            ->setDiscountPercent($discountPercent)
            ->setFeeId($feeId)
            ->setParentPosition($parentPosition)
            ->setPositionId($positionId)
            ->setPositionType($positionType)
            ->setSettlementId($settlementId)
            ->setSortPosition($sortPosition)
            ->setTaxId($taxId)
            ->setTitle($title)
            ->setUnitId($unitId)
            ->setUnitPrice($unitPrice)
            ->setUploaded($uploaded)
            ->setUploadedBy($uploadedBy);
    }
    /**
     * Get accountId value
     * @return int|null
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param int $accountId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementPositionDTO
     */
    public function setAccountId(?int $accountId = null): self
    {
        // validation for constraint: int
        if (!is_null($accountId) && !(is_int($accountId) || ctype_digit($accountId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementPositionDTO
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get bexioId value
     * @return int|null
     */
    public function getBexioId(): ?int
    {
        return $this->bexioId;
    }
    /**
     * Set bexioId value
     * @param int $bexioId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementPositionDTO
     */
    public function setBexioId(?int $bexioId = null): self
    {
        // validation for constraint: int
        if (!is_null($bexioId) && !(is_int($bexioId) || ctype_digit($bexioId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bexioId, true), gettype($bexioId)), __LINE__);
        }
        $this->bexioId = $bexioId;
        
        return $this;
    }
    /**
     * Get bexioPosition value
     * @return string|null
     */
    public function getBexioPosition(): ?string
    {
        return $this->bexioPosition;
    }
    /**
     * Set bexioPosition value
     * @param string $bexioPosition
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementPositionDTO
     */
    public function setBexioPosition(?string $bexioPosition = null): self
    {
        // validation for constraint: string
        if (!is_null($bexioPosition) && !is_string($bexioPosition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bexioPosition, true), gettype($bexioPosition)), __LINE__);
        }
        $this->bexioPosition = $bexioPosition;
        
        return $this;
    }
    /**
     * Get created value
     * @return string|null
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }
    /**
     * Set created value
     * @param string $created
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementPositionDTO
     */
    public function setCreated(?string $created = null): self
    {
        // validation for constraint: string
        if (!is_null($created) && !is_string($created)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($created, true), gettype($created)), __LINE__);
        }
        $this->created = $created;
        
        return $this;
    }
    /**
     * Get createdBy value
     * @return int|null
     */
    public function getCreatedBy(): ?int
    {
        return $this->createdBy;
    }
    /**
     * Set createdBy value
     * @param int $createdBy
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementPositionDTO
     */
    public function setCreatedBy(?int $createdBy = null): self
    {
        // validation for constraint: int
        if (!is_null($createdBy) && !(is_int($createdBy) || ctype_digit($createdBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($createdBy, true), gettype($createdBy)), __LINE__);
        }
        $this->createdBy = $createdBy;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementPositionDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementPositionDTO
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
     * Get discountPercent value
     * @return float|null
     */
    public function getDiscountPercent(): ?float
    {
        return $this->discountPercent;
    }
    /**
     * Set discountPercent value
     * @param float $discountPercent
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementPositionDTO
     */
    public function setDiscountPercent(?float $discountPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($discountPercent) && !(is_float($discountPercent) || is_numeric($discountPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($discountPercent, true), gettype($discountPercent)), __LINE__);
        }
        $this->discountPercent = $discountPercent;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementPositionDTO
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
     * Get parentPosition value
     * @return int|null
     */
    public function getParentPosition(): ?int
    {
        return $this->parentPosition;
    }
    /**
     * Set parentPosition value
     * @param int $parentPosition
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementPositionDTO
     */
    public function setParentPosition(?int $parentPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($parentPosition) && !(is_int($parentPosition) || ctype_digit($parentPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentPosition, true), gettype($parentPosition)), __LINE__);
        }
        $this->parentPosition = $parentPosition;
        
        return $this;
    }
    /**
     * Get positionId value
     * @return int|null
     */
    public function getPositionId(): ?int
    {
        return $this->positionId;
    }
    /**
     * Set positionId value
     * @param int $positionId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementPositionDTO
     */
    public function setPositionId(?int $positionId = null): self
    {
        // validation for constraint: int
        if (!is_null($positionId) && !(is_int($positionId) || ctype_digit($positionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionId, true), gettype($positionId)), __LINE__);
        }
        $this->positionId = $positionId;
        
        return $this;
    }
    /**
     * Get positionType value
     * @return string|null
     */
    public function getPositionType(): ?string
    {
        return $this->positionType;
    }
    /**
     * Set positionType value
     * @param string $positionType
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementPositionDTO
     */
    public function setPositionType(?string $positionType = null): self
    {
        // validation for constraint: string
        if (!is_null($positionType) && !is_string($positionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($positionType, true), gettype($positionType)), __LINE__);
        }
        $this->positionType = $positionType;
        
        return $this;
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementPositionDTO
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
    /**
     * Get sortPosition value
     * @return int|null
     */
    public function getSortPosition(): ?int
    {
        return $this->sortPosition;
    }
    /**
     * Set sortPosition value
     * @param int $sortPosition
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementPositionDTO
     */
    public function setSortPosition(?int $sortPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($sortPosition) && !(is_int($sortPosition) || ctype_digit($sortPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sortPosition, true), gettype($sortPosition)), __LINE__);
        }
        $this->sortPosition = $sortPosition;
        
        return $this;
    }
    /**
     * Get taxId value
     * @return int|null
     */
    public function getTaxId(): ?int
    {
        return $this->taxId;
    }
    /**
     * Set taxId value
     * @param int $taxId
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementPositionDTO
     */
    public function setTaxId(?int $taxId = null): self
    {
        // validation for constraint: int
        if (!is_null($taxId) && !(is_int($taxId) || ctype_digit($taxId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($taxId, true), gettype($taxId)), __LINE__);
        }
        $this->taxId = $taxId;
        
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementPositionDTO
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->title = $title;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementPositionDTO
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
    /**
     * Get unitPrice value
     * @return float|null
     */
    public function getUnitPrice(): ?float
    {
        return $this->unitPrice;
    }
    /**
     * Set unitPrice value
     * @param float $unitPrice
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementPositionDTO
     */
    public function setUnitPrice(?float $unitPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($unitPrice) && !(is_float($unitPrice) || is_numeric($unitPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($unitPrice, true), gettype($unitPrice)), __LINE__);
        }
        $this->unitPrice = $unitPrice;
        
        return $this;
    }
    /**
     * Get uploaded value
     * @return string|null
     */
    public function getUploaded(): ?string
    {
        return $this->uploaded;
    }
    /**
     * Set uploaded value
     * @param string $uploaded
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementPositionDTO
     */
    public function setUploaded(?string $uploaded = null): self
    {
        // validation for constraint: string
        if (!is_null($uploaded) && !is_string($uploaded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uploaded, true), gettype($uploaded)), __LINE__);
        }
        $this->uploaded = $uploaded;
        
        return $this;
    }
    /**
     * Get uploadedBy value
     * @return int|null
     */
    public function getUploadedBy(): ?int
    {
        return $this->uploadedBy;
    }
    /**
     * Set uploadedBy value
     * @param int $uploadedBy
     * @return \Pggns\MidocoApi\Mis\StructType\UmbrellaSettlementPositionDTO
     */
    public function setUploadedBy(?int $uploadedBy = null): self
    {
        // validation for constraint: int
        if (!is_null($uploadedBy) && !(is_int($uploadedBy) || ctype_digit($uploadedBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($uploadedBy, true), gettype($uploadedBy)), __LINE__);
        }
        $this->uploadedBy = $uploadedBy;
        
        return $this;
    }
}
