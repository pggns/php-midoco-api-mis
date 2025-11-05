<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VirtualCreditCardAccountDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VirtualCreditCardAccountDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The accountName
     * @var string|null
     */
    protected ?string $accountName = null;
    /**
     * The cardHolderId
     * @var string|null
     */
    protected ?string $cardHolderId = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The issuer
     * @var string|null
     */
    protected ?string $issuer = null;
    /**
     * Constructor method for VirtualCreditCardAccountDTO
     * @uses VirtualCreditCardAccountDTO::setAccountId()
     * @uses VirtualCreditCardAccountDTO::setAccountName()
     * @uses VirtualCreditCardAccountDTO::setCardHolderId()
     * @uses VirtualCreditCardAccountDTO::setCurrency()
     * @uses VirtualCreditCardAccountDTO::setCustomerId()
     * @uses VirtualCreditCardAccountDTO::setIssuer()
     * @param string $accountId
     * @param string $accountName
     * @param string $cardHolderId
     * @param string $currency
     * @param int $customerId
     * @param string $issuer
     */
    public function __construct(?string $accountId = null, ?string $accountName = null, ?string $cardHolderId = null, ?string $currency = null, ?int $customerId = null, ?string $issuer = null)
    {
        $this
            ->setAccountId($accountId)
            ->setAccountName($accountName)
            ->setCardHolderId($cardHolderId)
            ->setCurrency($currency)
            ->setCustomerId($customerId)
            ->setIssuer($issuer);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardAccountDTO
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get accountName value
     * @return string|null
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }
    /**
     * Set accountName value
     * @param string $accountName
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardAccountDTO
     */
    public function setAccountName(?string $accountName = null): self
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountName, true), gettype($accountName)), __LINE__);
        }
        $this->accountName = $accountName;
        
        return $this;
    }
    /**
     * Get cardHolderId value
     * @return string|null
     */
    public function getCardHolderId(): ?string
    {
        return $this->cardHolderId;
    }
    /**
     * Set cardHolderId value
     * @param string $cardHolderId
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardAccountDTO
     */
    public function setCardHolderId(?string $cardHolderId = null): self
    {
        // validation for constraint: string
        if (!is_null($cardHolderId) && !is_string($cardHolderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardHolderId, true), gettype($cardHolderId)), __LINE__);
        }
        $this->cardHolderId = $cardHolderId;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardAccountDTO
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardAccountDTO
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
     * Get issuer value
     * @return string|null
     */
    public function getIssuer(): ?string
    {
        return $this->issuer;
    }
    /**
     * Set issuer value
     * @param string $issuer
     * @return \Pggns\MidocoApi\Mis\StructType\VirtualCreditCardAccountDTO
     */
    public function setIssuer(?string $issuer = null): self
    {
        // validation for constraint: string
        if (!is_null($issuer) && !is_string($issuer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issuer, true), gettype($issuer)), __LINE__);
        }
        $this->issuer = $issuer;
        
        return $this;
    }
}
