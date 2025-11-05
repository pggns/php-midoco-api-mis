<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentTokenAttribDescriptionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaymentTokenAttribDescriptionDTO extends AbstractStructBase
{
    /**
     * The attribTypeId
     * @var string|null
     */
    protected ?string $attribTypeId = null;
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for PaymentTokenAttribDescriptionDTO
     * @uses PaymentTokenAttribDescriptionDTO::setAttribTypeId()
     * @uses PaymentTokenAttribDescriptionDTO::setCultureId()
     * @uses PaymentTokenAttribDescriptionDTO::setDescription()
     * @param string $attribTypeId
     * @param string $cultureId
     * @param string $description
     */
    public function __construct(?string $attribTypeId = null, ?string $cultureId = null, ?string $description = null)
    {
        $this
            ->setAttribTypeId($attribTypeId)
            ->setCultureId($cultureId)
            ->setDescription($description);
    }
    /**
     * Get attribTypeId value
     * @return string|null
     */
    public function getAttribTypeId(): ?string
    {
        return $this->attribTypeId;
    }
    /**
     * Set attribTypeId value
     * @param string $attribTypeId
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenAttribDescriptionDTO
     */
    public function setAttribTypeId(?string $attribTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($attribTypeId) && !is_string($attribTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attribTypeId, true), gettype($attribTypeId)), __LINE__);
        }
        $this->attribTypeId = $attribTypeId;
        
        return $this;
    }
    /**
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenAttribDescriptionDTO
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\PaymentTokenAttribDescriptionDTO
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
}
