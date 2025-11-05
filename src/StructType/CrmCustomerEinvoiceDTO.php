<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmCustomerEinvoiceDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmCustomerEinvoiceDTO extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The embedPdf
     * @var bool|null
     */
    protected ?bool $embedPdf = null;
    /**
     * The gateway
     * @var string|null
     */
    protected ?string $gateway = null;
    /**
     * The isOrderRefRequired
     * @var bool|null
     */
    protected ?bool $isOrderRefRequired = null;
    /**
     * The isRoutingIdRequired
     * @var bool|null
     */
    protected ?bool $isRoutingIdRequired = null;
    /**
     * The isSupplierNoRequired
     * @var bool|null
     */
    protected ?bool $isSupplierNoRequired = null;
    /**
     * The routingId
     * @var string|null
     */
    protected ?string $routingId = null;
    /**
     * The sellerTradeParty
     * @var string|null
     */
    protected ?string $sellerTradeParty = null;
    /**
     * The supplierNo
     * @var string|null
     */
    protected ?string $supplierNo = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for CrmCustomerEinvoiceDTO
     * @uses CrmCustomerEinvoiceDTO::setCustomerId()
     * @uses CrmCustomerEinvoiceDTO::setEmail()
     * @uses CrmCustomerEinvoiceDTO::setEmbedPdf()
     * @uses CrmCustomerEinvoiceDTO::setGateway()
     * @uses CrmCustomerEinvoiceDTO::setIsOrderRefRequired()
     * @uses CrmCustomerEinvoiceDTO::setIsRoutingIdRequired()
     * @uses CrmCustomerEinvoiceDTO::setIsSupplierNoRequired()
     * @uses CrmCustomerEinvoiceDTO::setRoutingId()
     * @uses CrmCustomerEinvoiceDTO::setSellerTradeParty()
     * @uses CrmCustomerEinvoiceDTO::setSupplierNo()
     * @uses CrmCustomerEinvoiceDTO::setType()
     * @param int $customerId
     * @param string $email
     * @param bool $embedPdf
     * @param string $gateway
     * @param bool $isOrderRefRequired
     * @param bool $isRoutingIdRequired
     * @param bool $isSupplierNoRequired
     * @param string $routingId
     * @param string $sellerTradeParty
     * @param string $supplierNo
     * @param string $type
     */
    public function __construct(?int $customerId = null, ?string $email = null, ?bool $embedPdf = null, ?string $gateway = null, ?bool $isOrderRefRequired = null, ?bool $isRoutingIdRequired = null, ?bool $isSupplierNoRequired = null, ?string $routingId = null, ?string $sellerTradeParty = null, ?string $supplierNo = null, ?string $type = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setEmail($email)
            ->setEmbedPdf($embedPdf)
            ->setGateway($gateway)
            ->setIsOrderRefRequired($isOrderRefRequired)
            ->setIsRoutingIdRequired($isRoutingIdRequired)
            ->setIsSupplierNoRequired($isSupplierNoRequired)
            ->setRoutingId($routingId)
            ->setSellerTradeParty($sellerTradeParty)
            ->setSupplierNo($supplierNo)
            ->setType($type);
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerEinvoiceDTO
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
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerEinvoiceDTO
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get embedPdf value
     * @return bool|null
     */
    public function getEmbedPdf(): ?bool
    {
        return $this->embedPdf;
    }
    /**
     * Set embedPdf value
     * @param bool $embedPdf
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerEinvoiceDTO
     */
    public function setEmbedPdf(?bool $embedPdf = null): self
    {
        // validation for constraint: boolean
        if (!is_null($embedPdf) && !is_bool($embedPdf)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($embedPdf, true), gettype($embedPdf)), __LINE__);
        }
        $this->embedPdf = $embedPdf;
        
        return $this;
    }
    /**
     * Get gateway value
     * @return string|null
     */
    public function getGateway(): ?string
    {
        return $this->gateway;
    }
    /**
     * Set gateway value
     * @param string $gateway
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerEinvoiceDTO
     */
    public function setGateway(?string $gateway = null): self
    {
        // validation for constraint: string
        if (!is_null($gateway) && !is_string($gateway)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gateway, true), gettype($gateway)), __LINE__);
        }
        $this->gateway = $gateway;
        
        return $this;
    }
    /**
     * Get isOrderRefRequired value
     * @return bool|null
     */
    public function getIsOrderRefRequired(): ?bool
    {
        return $this->isOrderRefRequired;
    }
    /**
     * Set isOrderRefRequired value
     * @param bool $isOrderRefRequired
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerEinvoiceDTO
     */
    public function setIsOrderRefRequired(?bool $isOrderRefRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOrderRefRequired) && !is_bool($isOrderRefRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOrderRefRequired, true), gettype($isOrderRefRequired)), __LINE__);
        }
        $this->isOrderRefRequired = $isOrderRefRequired;
        
        return $this;
    }
    /**
     * Get isRoutingIdRequired value
     * @return bool|null
     */
    public function getIsRoutingIdRequired(): ?bool
    {
        return $this->isRoutingIdRequired;
    }
    /**
     * Set isRoutingIdRequired value
     * @param bool $isRoutingIdRequired
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerEinvoiceDTO
     */
    public function setIsRoutingIdRequired(?bool $isRoutingIdRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRoutingIdRequired) && !is_bool($isRoutingIdRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRoutingIdRequired, true), gettype($isRoutingIdRequired)), __LINE__);
        }
        $this->isRoutingIdRequired = $isRoutingIdRequired;
        
        return $this;
    }
    /**
     * Get isSupplierNoRequired value
     * @return bool|null
     */
    public function getIsSupplierNoRequired(): ?bool
    {
        return $this->isSupplierNoRequired;
    }
    /**
     * Set isSupplierNoRequired value
     * @param bool $isSupplierNoRequired
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerEinvoiceDTO
     */
    public function setIsSupplierNoRequired(?bool $isSupplierNoRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSupplierNoRequired) && !is_bool($isSupplierNoRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSupplierNoRequired, true), gettype($isSupplierNoRequired)), __LINE__);
        }
        $this->isSupplierNoRequired = $isSupplierNoRequired;
        
        return $this;
    }
    /**
     * Get routingId value
     * @return string|null
     */
    public function getRoutingId(): ?string
    {
        return $this->routingId;
    }
    /**
     * Set routingId value
     * @param string $routingId
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerEinvoiceDTO
     */
    public function setRoutingId(?string $routingId = null): self
    {
        // validation for constraint: string
        if (!is_null($routingId) && !is_string($routingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingId, true), gettype($routingId)), __LINE__);
        }
        $this->routingId = $routingId;
        
        return $this;
    }
    /**
     * Get sellerTradeParty value
     * @return string|null
     */
    public function getSellerTradeParty(): ?string
    {
        return $this->sellerTradeParty;
    }
    /**
     * Set sellerTradeParty value
     * @param string $sellerTradeParty
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerEinvoiceDTO
     */
    public function setSellerTradeParty(?string $sellerTradeParty = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerTradeParty) && !is_string($sellerTradeParty)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerTradeParty, true), gettype($sellerTradeParty)), __LINE__);
        }
        $this->sellerTradeParty = $sellerTradeParty;
        
        return $this;
    }
    /**
     * Get supplierNo value
     * @return string|null
     */
    public function getSupplierNo(): ?string
    {
        return $this->supplierNo;
    }
    /**
     * Set supplierNo value
     * @param string $supplierNo
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerEinvoiceDTO
     */
    public function setSupplierNo(?string $supplierNo = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierNo) && !is_string($supplierNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierNo, true), gettype($supplierNo)), __LINE__);
        }
        $this->supplierNo = $supplierNo;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerEinvoiceDTO
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
}
