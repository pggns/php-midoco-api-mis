<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmCustomerPaymentDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmCustomerPaymentDTO extends AbstractStructBase
{
    /**
     * The acceptCc
     * @var bool|null
     */
    protected ?bool $acceptCc = null;
    /**
     * The acceptDebit
     * @var bool|null
     */
    protected ?bool $acceptDebit = null;
    /**
     * The achCreditPayment
     * @var bool|null
     */
    protected ?bool $achCreditPayment = null;
    /**
     * The achDebitPayment
     * @var bool|null
     */
    protected ?bool $achDebitPayment = null;
    /**
     * The autoPrintInvoiceId
     * @var string|null
     */
    protected ?string $autoPrintInvoiceId = null;
    /**
     * The avoidDebit
     * @var bool|null
     */
    protected ?bool $avoidDebit = null;
    /**
     * The bacsCreditPayment
     * @var bool|null
     */
    protected ?bool $bacsCreditPayment = null;
    /**
     * The bacsDebitPayment
     * @var bool|null
     */
    protected ?bool $bacsDebitPayment = null;
    /**
     * The bankTransferCollective
     * @var int|null
     */
    protected ?int $bankTransferCollective = null;
    /**
     * The bankTransferFees
     * @var string|null
     */
    protected ?string $bankTransferFees = null;
    /**
     * The bankTransferInstrKey1
     * @var string|null
     */
    protected ?string $bankTransferInstrKey1 = null;
    /**
     * The bankTransferInstrKey2
     * @var string|null
     */
    protected ?string $bankTransferInstrKey2 = null;
    /**
     * The bankTransferInstrKey3
     * @var string|null
     */
    protected ?string $bankTransferInstrKey3 = null;
    /**
     * The bankTransferInstrKey4
     * @var string|null
     */
    protected ?string $bankTransferInstrKey4 = null;
    /**
     * The bankTransferProt
     * @var int|null
     */
    protected ?int $bankTransferProt = null;
    /**
     * The bankTransferType
     * @var string|null
     */
    protected ?string $bankTransferType = null;
    /**
     * The billPerPassenger
     * @var bool|null
     */
    protected ?bool $billPerPassenger = null;
    /**
     * The billPerPassengerPaymentOfTicket
     * @var bool|null
     */
    protected ?bool $billPerPassengerPaymentOfTicket = null;
    /**
     * The ccPrintSignature
     * @var int|null
     */
    protected ?int $ccPrintSignature = null;
    /**
     * The chargesGroup
     * @var string|null
     */
    protected ?string $chargesGroup = null;
    /**
     * The chequeCreditPayment
     * @var bool|null
     */
    protected ?bool $chequeCreditPayment = null;
    /**
     * The collectiveInvoice
     * @var bool|null
     */
    protected ?bool $collectiveInvoice = null;
    /**
     * The collectiveInvoiceType
     * @var string|null
     */
    protected ?string $collectiveInvoiceType = null;
    /**
     * The companyUsage
     * @var bool|null
     */
    protected ?bool $companyUsage = null;
    /**
     * The concernId
     * @var string|null
     */
    protected ?string $concernId = null;
    /**
     * The creditLimit
     * @var float|null
     */
    protected ?float $creditLimit = null;
    /**
     * The creditLimitWarningPercent
     * @var float|null
     */
    protected ?float $creditLimitWarningPercent = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The directDebit
     * @var bool|null
     */
    protected ?bool $directDebit = null;
    /**
     * The directDebitDate
     * @var string|null
     */
    protected ?string $directDebitDate = null;
    /**
     * The disableCommissionOnVoid
     * @var bool|null
     */
    protected ?bool $disableCommissionOnVoid = null;
    /**
     * The disableProvisionPayment
     * @var bool|null
     */
    protected ?bool $disableProvisionPayment = null;
    /**
     * The documentCopies
     * @var int|null
     */
    protected ?int $documentCopies = null;
    /**
     * The eftCreditPayment
     * @var bool|null
     */
    protected ?bool $eftCreditPayment = null;
    /**
     * The eftDebitPayment
     * @var bool|null
     */
    protected ?bool $eftDebitPayment = null;
    /**
     * The foreignBankTransfer
     * @var bool|null
     */
    protected ?bool $foreignBankTransfer = null;
    /**
     * The hasBtContract
     * @var bool|null
     */
    protected ?bool $hasBtContract = null;
    /**
     * The invoiceAsEmail
     * @var bool|null
     */
    protected ?bool $invoiceAsEmail = null;
    /**
     * The invoiceFileFormatId
     * @var string|null
     */
    protected ?string $invoiceFileFormatId = null;
    /**
     * The isDunningBlock
     * @var bool|null
     */
    protected ?bool $isDunningBlock = null;
    /**
     * The isReverseCharge
     * @var bool|null
     */
    protected ?bool $isReverseCharge = null;
    /**
     * The methodOfPayment
     * @var string|null
     */
    protected ?string $methodOfPayment = null;
    /**
     * The noPaymentMethod
     * @var bool|null
     */
    protected ?bool $noPaymentMethod = null;
    /**
     * The outgoingBankTransfer
     * @var bool|null
     */
    protected ?bool $outgoingBankTransfer = null;
    /**
     * The paymentConditionId
     * @var string|null
     */
    protected ?string $paymentConditionId = null;
    /**
     * The paymentDelay
     * @var int|null
     */
    protected ?int $paymentDelay = null;
    /**
     * The paymentForcedCcCardId
     * @var int|null
     */
    protected ?int $paymentForcedCcCardId = null;
    /**
     * The paymentForcedDebitCardId
     * @var int|null
     */
    protected ?int $paymentForcedDebitCardId = null;
    /**
     * The paymentForcedType
     * @var string|null
     */
    protected ?string $paymentForcedType = null;
    /**
     * The prepayment
     * @var bool|null
     */
    protected ?bool $prepayment = null;
    /**
     * The printOptionId
     * @var int|null
     */
    protected ?int $printOptionId = null;
    /**
     * The qrInvoiceTransfer
     * @var bool|null
     */
    protected ?bool $qrInvoiceTransfer = null;
    /**
     * The rebateAllowed
     * @var bool|null
     */
    protected ?bool $rebateAllowed = null;
    /**
     * The sendCsvInvoice
     * @var bool|null
     */
    protected ?bool $sendCsvInvoice = null;
    /**
     * The sepaDebit
     * @var bool|null
     */
    protected ?bool $sepaDebit = null;
    /**
     * The sepaTransfer
     * @var bool|null
     */
    protected ?bool $sepaTransfer = null;
    /**
     * The smallBusiness
     * @var bool|null
     */
    protected ?bool $smallBusiness = null;
    /**
     * The swissCreditPayment
     * @var bool|null
     */
    protected ?bool $swissCreditPayment = null;
    /**
     * The swissDebitPayment
     * @var bool|null
     */
    protected ?bool $swissDebitPayment = null;
    /**
     * The vatCodeSales
     * @var string|null
     */
    protected ?string $vatCodeSales = null;
    /**
     * The vatLiability
     * @var bool|null
     */
    protected ?bool $vatLiability = null;
    /**
     * The vatOrganic
     * @var bool|null
     */
    protected ?bool $vatOrganic = null;
    /**
     * The wireCreditPayment
     * @var bool|null
     */
    protected ?bool $wireCreditPayment = null;
    /**
     * The wiseCreditPayment
     * @var bool|null
     */
    protected ?bool $wiseCreditPayment = null;
    /**
     * Constructor method for CrmCustomerPaymentDTO
     * @uses CrmCustomerPaymentDTO::setAcceptCc()
     * @uses CrmCustomerPaymentDTO::setAcceptDebit()
     * @uses CrmCustomerPaymentDTO::setAchCreditPayment()
     * @uses CrmCustomerPaymentDTO::setAchDebitPayment()
     * @uses CrmCustomerPaymentDTO::setAutoPrintInvoiceId()
     * @uses CrmCustomerPaymentDTO::setAvoidDebit()
     * @uses CrmCustomerPaymentDTO::setBacsCreditPayment()
     * @uses CrmCustomerPaymentDTO::setBacsDebitPayment()
     * @uses CrmCustomerPaymentDTO::setBankTransferCollective()
     * @uses CrmCustomerPaymentDTO::setBankTransferFees()
     * @uses CrmCustomerPaymentDTO::setBankTransferInstrKey1()
     * @uses CrmCustomerPaymentDTO::setBankTransferInstrKey2()
     * @uses CrmCustomerPaymentDTO::setBankTransferInstrKey3()
     * @uses CrmCustomerPaymentDTO::setBankTransferInstrKey4()
     * @uses CrmCustomerPaymentDTO::setBankTransferProt()
     * @uses CrmCustomerPaymentDTO::setBankTransferType()
     * @uses CrmCustomerPaymentDTO::setBillPerPassenger()
     * @uses CrmCustomerPaymentDTO::setBillPerPassengerPaymentOfTicket()
     * @uses CrmCustomerPaymentDTO::setCcPrintSignature()
     * @uses CrmCustomerPaymentDTO::setChargesGroup()
     * @uses CrmCustomerPaymentDTO::setChequeCreditPayment()
     * @uses CrmCustomerPaymentDTO::setCollectiveInvoice()
     * @uses CrmCustomerPaymentDTO::setCollectiveInvoiceType()
     * @uses CrmCustomerPaymentDTO::setCompanyUsage()
     * @uses CrmCustomerPaymentDTO::setConcernId()
     * @uses CrmCustomerPaymentDTO::setCreditLimit()
     * @uses CrmCustomerPaymentDTO::setCreditLimitWarningPercent()
     * @uses CrmCustomerPaymentDTO::setCustomerId()
     * @uses CrmCustomerPaymentDTO::setDirectDebit()
     * @uses CrmCustomerPaymentDTO::setDirectDebitDate()
     * @uses CrmCustomerPaymentDTO::setDisableCommissionOnVoid()
     * @uses CrmCustomerPaymentDTO::setDisableProvisionPayment()
     * @uses CrmCustomerPaymentDTO::setDocumentCopies()
     * @uses CrmCustomerPaymentDTO::setEftCreditPayment()
     * @uses CrmCustomerPaymentDTO::setEftDebitPayment()
     * @uses CrmCustomerPaymentDTO::setForeignBankTransfer()
     * @uses CrmCustomerPaymentDTO::setHasBtContract()
     * @uses CrmCustomerPaymentDTO::setInvoiceAsEmail()
     * @uses CrmCustomerPaymentDTO::setInvoiceFileFormatId()
     * @uses CrmCustomerPaymentDTO::setIsDunningBlock()
     * @uses CrmCustomerPaymentDTO::setIsReverseCharge()
     * @uses CrmCustomerPaymentDTO::setMethodOfPayment()
     * @uses CrmCustomerPaymentDTO::setNoPaymentMethod()
     * @uses CrmCustomerPaymentDTO::setOutgoingBankTransfer()
     * @uses CrmCustomerPaymentDTO::setPaymentConditionId()
     * @uses CrmCustomerPaymentDTO::setPaymentDelay()
     * @uses CrmCustomerPaymentDTO::setPaymentForcedCcCardId()
     * @uses CrmCustomerPaymentDTO::setPaymentForcedDebitCardId()
     * @uses CrmCustomerPaymentDTO::setPaymentForcedType()
     * @uses CrmCustomerPaymentDTO::setPrepayment()
     * @uses CrmCustomerPaymentDTO::setPrintOptionId()
     * @uses CrmCustomerPaymentDTO::setQrInvoiceTransfer()
     * @uses CrmCustomerPaymentDTO::setRebateAllowed()
     * @uses CrmCustomerPaymentDTO::setSendCsvInvoice()
     * @uses CrmCustomerPaymentDTO::setSepaDebit()
     * @uses CrmCustomerPaymentDTO::setSepaTransfer()
     * @uses CrmCustomerPaymentDTO::setSmallBusiness()
     * @uses CrmCustomerPaymentDTO::setSwissCreditPayment()
     * @uses CrmCustomerPaymentDTO::setSwissDebitPayment()
     * @uses CrmCustomerPaymentDTO::setVatCodeSales()
     * @uses CrmCustomerPaymentDTO::setVatLiability()
     * @uses CrmCustomerPaymentDTO::setVatOrganic()
     * @uses CrmCustomerPaymentDTO::setWireCreditPayment()
     * @uses CrmCustomerPaymentDTO::setWiseCreditPayment()
     * @param bool $acceptCc
     * @param bool $acceptDebit
     * @param bool $achCreditPayment
     * @param bool $achDebitPayment
     * @param string $autoPrintInvoiceId
     * @param bool $avoidDebit
     * @param bool $bacsCreditPayment
     * @param bool $bacsDebitPayment
     * @param int $bankTransferCollective
     * @param string $bankTransferFees
     * @param string $bankTransferInstrKey1
     * @param string $bankTransferInstrKey2
     * @param string $bankTransferInstrKey3
     * @param string $bankTransferInstrKey4
     * @param int $bankTransferProt
     * @param string $bankTransferType
     * @param bool $billPerPassenger
     * @param bool $billPerPassengerPaymentOfTicket
     * @param int $ccPrintSignature
     * @param string $chargesGroup
     * @param bool $chequeCreditPayment
     * @param bool $collectiveInvoice
     * @param string $collectiveInvoiceType
     * @param bool $companyUsage
     * @param string $concernId
     * @param float $creditLimit
     * @param float $creditLimitWarningPercent
     * @param int $customerId
     * @param bool $directDebit
     * @param string $directDebitDate
     * @param bool $disableCommissionOnVoid
     * @param bool $disableProvisionPayment
     * @param int $documentCopies
     * @param bool $eftCreditPayment
     * @param bool $eftDebitPayment
     * @param bool $foreignBankTransfer
     * @param bool $hasBtContract
     * @param bool $invoiceAsEmail
     * @param string $invoiceFileFormatId
     * @param bool $isDunningBlock
     * @param bool $isReverseCharge
     * @param string $methodOfPayment
     * @param bool $noPaymentMethod
     * @param bool $outgoingBankTransfer
     * @param string $paymentConditionId
     * @param int $paymentDelay
     * @param int $paymentForcedCcCardId
     * @param int $paymentForcedDebitCardId
     * @param string $paymentForcedType
     * @param bool $prepayment
     * @param int $printOptionId
     * @param bool $qrInvoiceTransfer
     * @param bool $rebateAllowed
     * @param bool $sendCsvInvoice
     * @param bool $sepaDebit
     * @param bool $sepaTransfer
     * @param bool $smallBusiness
     * @param bool $swissCreditPayment
     * @param bool $swissDebitPayment
     * @param string $vatCodeSales
     * @param bool $vatLiability
     * @param bool $vatOrganic
     * @param bool $wireCreditPayment
     * @param bool $wiseCreditPayment
     */
    public function __construct(?bool $acceptCc = null, ?bool $acceptDebit = null, ?bool $achCreditPayment = null, ?bool $achDebitPayment = null, ?string $autoPrintInvoiceId = null, ?bool $avoidDebit = null, ?bool $bacsCreditPayment = null, ?bool $bacsDebitPayment = null, ?int $bankTransferCollective = null, ?string $bankTransferFees = null, ?string $bankTransferInstrKey1 = null, ?string $bankTransferInstrKey2 = null, ?string $bankTransferInstrKey3 = null, ?string $bankTransferInstrKey4 = null, ?int $bankTransferProt = null, ?string $bankTransferType = null, ?bool $billPerPassenger = null, ?bool $billPerPassengerPaymentOfTicket = null, ?int $ccPrintSignature = null, ?string $chargesGroup = null, ?bool $chequeCreditPayment = null, ?bool $collectiveInvoice = null, ?string $collectiveInvoiceType = null, ?bool $companyUsage = null, ?string $concernId = null, ?float $creditLimit = null, ?float $creditLimitWarningPercent = null, ?int $customerId = null, ?bool $directDebit = null, ?string $directDebitDate = null, ?bool $disableCommissionOnVoid = null, ?bool $disableProvisionPayment = null, ?int $documentCopies = null, ?bool $eftCreditPayment = null, ?bool $eftDebitPayment = null, ?bool $foreignBankTransfer = null, ?bool $hasBtContract = null, ?bool $invoiceAsEmail = null, ?string $invoiceFileFormatId = null, ?bool $isDunningBlock = null, ?bool $isReverseCharge = null, ?string $methodOfPayment = null, ?bool $noPaymentMethod = null, ?bool $outgoingBankTransfer = null, ?string $paymentConditionId = null, ?int $paymentDelay = null, ?int $paymentForcedCcCardId = null, ?int $paymentForcedDebitCardId = null, ?string $paymentForcedType = null, ?bool $prepayment = null, ?int $printOptionId = null, ?bool $qrInvoiceTransfer = null, ?bool $rebateAllowed = null, ?bool $sendCsvInvoice = null, ?bool $sepaDebit = null, ?bool $sepaTransfer = null, ?bool $smallBusiness = null, ?bool $swissCreditPayment = null, ?bool $swissDebitPayment = null, ?string $vatCodeSales = null, ?bool $vatLiability = null, ?bool $vatOrganic = null, ?bool $wireCreditPayment = null, ?bool $wiseCreditPayment = null)
    {
        $this
            ->setAcceptCc($acceptCc)
            ->setAcceptDebit($acceptDebit)
            ->setAchCreditPayment($achCreditPayment)
            ->setAchDebitPayment($achDebitPayment)
            ->setAutoPrintInvoiceId($autoPrintInvoiceId)
            ->setAvoidDebit($avoidDebit)
            ->setBacsCreditPayment($bacsCreditPayment)
            ->setBacsDebitPayment($bacsDebitPayment)
            ->setBankTransferCollective($bankTransferCollective)
            ->setBankTransferFees($bankTransferFees)
            ->setBankTransferInstrKey1($bankTransferInstrKey1)
            ->setBankTransferInstrKey2($bankTransferInstrKey2)
            ->setBankTransferInstrKey3($bankTransferInstrKey3)
            ->setBankTransferInstrKey4($bankTransferInstrKey4)
            ->setBankTransferProt($bankTransferProt)
            ->setBankTransferType($bankTransferType)
            ->setBillPerPassenger($billPerPassenger)
            ->setBillPerPassengerPaymentOfTicket($billPerPassengerPaymentOfTicket)
            ->setCcPrintSignature($ccPrintSignature)
            ->setChargesGroup($chargesGroup)
            ->setChequeCreditPayment($chequeCreditPayment)
            ->setCollectiveInvoice($collectiveInvoice)
            ->setCollectiveInvoiceType($collectiveInvoiceType)
            ->setCompanyUsage($companyUsage)
            ->setConcernId($concernId)
            ->setCreditLimit($creditLimit)
            ->setCreditLimitWarningPercent($creditLimitWarningPercent)
            ->setCustomerId($customerId)
            ->setDirectDebit($directDebit)
            ->setDirectDebitDate($directDebitDate)
            ->setDisableCommissionOnVoid($disableCommissionOnVoid)
            ->setDisableProvisionPayment($disableProvisionPayment)
            ->setDocumentCopies($documentCopies)
            ->setEftCreditPayment($eftCreditPayment)
            ->setEftDebitPayment($eftDebitPayment)
            ->setForeignBankTransfer($foreignBankTransfer)
            ->setHasBtContract($hasBtContract)
            ->setInvoiceAsEmail($invoiceAsEmail)
            ->setInvoiceFileFormatId($invoiceFileFormatId)
            ->setIsDunningBlock($isDunningBlock)
            ->setIsReverseCharge($isReverseCharge)
            ->setMethodOfPayment($methodOfPayment)
            ->setNoPaymentMethod($noPaymentMethod)
            ->setOutgoingBankTransfer($outgoingBankTransfer)
            ->setPaymentConditionId($paymentConditionId)
            ->setPaymentDelay($paymentDelay)
            ->setPaymentForcedCcCardId($paymentForcedCcCardId)
            ->setPaymentForcedDebitCardId($paymentForcedDebitCardId)
            ->setPaymentForcedType($paymentForcedType)
            ->setPrepayment($prepayment)
            ->setPrintOptionId($printOptionId)
            ->setQrInvoiceTransfer($qrInvoiceTransfer)
            ->setRebateAllowed($rebateAllowed)
            ->setSendCsvInvoice($sendCsvInvoice)
            ->setSepaDebit($sepaDebit)
            ->setSepaTransfer($sepaTransfer)
            ->setSmallBusiness($smallBusiness)
            ->setSwissCreditPayment($swissCreditPayment)
            ->setSwissDebitPayment($swissDebitPayment)
            ->setVatCodeSales($vatCodeSales)
            ->setVatLiability($vatLiability)
            ->setVatOrganic($vatOrganic)
            ->setWireCreditPayment($wireCreditPayment)
            ->setWiseCreditPayment($wiseCreditPayment);
    }
    /**
     * Get acceptCc value
     * @return bool|null
     */
    public function getAcceptCc(): ?bool
    {
        return $this->acceptCc;
    }
    /**
     * Set acceptCc value
     * @param bool $acceptCc
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setAcceptCc(?bool $acceptCc = null): self
    {
        // validation for constraint: boolean
        if (!is_null($acceptCc) && !is_bool($acceptCc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($acceptCc, true), gettype($acceptCc)), __LINE__);
        }
        $this->acceptCc = $acceptCc;
        
        return $this;
    }
    /**
     * Get acceptDebit value
     * @return bool|null
     */
    public function getAcceptDebit(): ?bool
    {
        return $this->acceptDebit;
    }
    /**
     * Set acceptDebit value
     * @param bool $acceptDebit
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setAcceptDebit(?bool $acceptDebit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($acceptDebit) && !is_bool($acceptDebit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($acceptDebit, true), gettype($acceptDebit)), __LINE__);
        }
        $this->acceptDebit = $acceptDebit;
        
        return $this;
    }
    /**
     * Get achCreditPayment value
     * @return bool|null
     */
    public function getAchCreditPayment(): ?bool
    {
        return $this->achCreditPayment;
    }
    /**
     * Set achCreditPayment value
     * @param bool $achCreditPayment
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setAchCreditPayment(?bool $achCreditPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($achCreditPayment) && !is_bool($achCreditPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($achCreditPayment, true), gettype($achCreditPayment)), __LINE__);
        }
        $this->achCreditPayment = $achCreditPayment;
        
        return $this;
    }
    /**
     * Get achDebitPayment value
     * @return bool|null
     */
    public function getAchDebitPayment(): ?bool
    {
        return $this->achDebitPayment;
    }
    /**
     * Set achDebitPayment value
     * @param bool $achDebitPayment
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setAchDebitPayment(?bool $achDebitPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($achDebitPayment) && !is_bool($achDebitPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($achDebitPayment, true), gettype($achDebitPayment)), __LINE__);
        }
        $this->achDebitPayment = $achDebitPayment;
        
        return $this;
    }
    /**
     * Get autoPrintInvoiceId value
     * @return string|null
     */
    public function getAutoPrintInvoiceId(): ?string
    {
        return $this->autoPrintInvoiceId;
    }
    /**
     * Set autoPrintInvoiceId value
     * @param string $autoPrintInvoiceId
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setAutoPrintInvoiceId(?string $autoPrintInvoiceId = null): self
    {
        // validation for constraint: string
        if (!is_null($autoPrintInvoiceId) && !is_string($autoPrintInvoiceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($autoPrintInvoiceId, true), gettype($autoPrintInvoiceId)), __LINE__);
        }
        $this->autoPrintInvoiceId = $autoPrintInvoiceId;
        
        return $this;
    }
    /**
     * Get avoidDebit value
     * @return bool|null
     */
    public function getAvoidDebit(): ?bool
    {
        return $this->avoidDebit;
    }
    /**
     * Set avoidDebit value
     * @param bool $avoidDebit
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setAvoidDebit(?bool $avoidDebit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($avoidDebit) && !is_bool($avoidDebit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($avoidDebit, true), gettype($avoidDebit)), __LINE__);
        }
        $this->avoidDebit = $avoidDebit;
        
        return $this;
    }
    /**
     * Get bacsCreditPayment value
     * @return bool|null
     */
    public function getBacsCreditPayment(): ?bool
    {
        return $this->bacsCreditPayment;
    }
    /**
     * Set bacsCreditPayment value
     * @param bool $bacsCreditPayment
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setBacsCreditPayment(?bool $bacsCreditPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bacsCreditPayment) && !is_bool($bacsCreditPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bacsCreditPayment, true), gettype($bacsCreditPayment)), __LINE__);
        }
        $this->bacsCreditPayment = $bacsCreditPayment;
        
        return $this;
    }
    /**
     * Get bacsDebitPayment value
     * @return bool|null
     */
    public function getBacsDebitPayment(): ?bool
    {
        return $this->bacsDebitPayment;
    }
    /**
     * Set bacsDebitPayment value
     * @param bool $bacsDebitPayment
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setBacsDebitPayment(?bool $bacsDebitPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bacsDebitPayment) && !is_bool($bacsDebitPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bacsDebitPayment, true), gettype($bacsDebitPayment)), __LINE__);
        }
        $this->bacsDebitPayment = $bacsDebitPayment;
        
        return $this;
    }
    /**
     * Get bankTransferCollective value
     * @return int|null
     */
    public function getBankTransferCollective(): ?int
    {
        return $this->bankTransferCollective;
    }
    /**
     * Set bankTransferCollective value
     * @param int $bankTransferCollective
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setBankTransferCollective(?int $bankTransferCollective = null): self
    {
        // validation for constraint: int
        if (!is_null($bankTransferCollective) && !(is_int($bankTransferCollective) || ctype_digit($bankTransferCollective))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bankTransferCollective, true), gettype($bankTransferCollective)), __LINE__);
        }
        $this->bankTransferCollective = $bankTransferCollective;
        
        return $this;
    }
    /**
     * Get bankTransferFees value
     * @return string|null
     */
    public function getBankTransferFees(): ?string
    {
        return $this->bankTransferFees;
    }
    /**
     * Set bankTransferFees value
     * @param string $bankTransferFees
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setBankTransferFees(?string $bankTransferFees = null): self
    {
        // validation for constraint: string
        if (!is_null($bankTransferFees) && !is_string($bankTransferFees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankTransferFees, true), gettype($bankTransferFees)), __LINE__);
        }
        $this->bankTransferFees = $bankTransferFees;
        
        return $this;
    }
    /**
     * Get bankTransferInstrKey1 value
     * @return string|null
     */
    public function getBankTransferInstrKey1(): ?string
    {
        return $this->bankTransferInstrKey1;
    }
    /**
     * Set bankTransferInstrKey1 value
     * @param string $bankTransferInstrKey1
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setBankTransferInstrKey1(?string $bankTransferInstrKey1 = null): self
    {
        // validation for constraint: string
        if (!is_null($bankTransferInstrKey1) && !is_string($bankTransferInstrKey1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankTransferInstrKey1, true), gettype($bankTransferInstrKey1)), __LINE__);
        }
        $this->bankTransferInstrKey1 = $bankTransferInstrKey1;
        
        return $this;
    }
    /**
     * Get bankTransferInstrKey2 value
     * @return string|null
     */
    public function getBankTransferInstrKey2(): ?string
    {
        return $this->bankTransferInstrKey2;
    }
    /**
     * Set bankTransferInstrKey2 value
     * @param string $bankTransferInstrKey2
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setBankTransferInstrKey2(?string $bankTransferInstrKey2 = null): self
    {
        // validation for constraint: string
        if (!is_null($bankTransferInstrKey2) && !is_string($bankTransferInstrKey2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankTransferInstrKey2, true), gettype($bankTransferInstrKey2)), __LINE__);
        }
        $this->bankTransferInstrKey2 = $bankTransferInstrKey2;
        
        return $this;
    }
    /**
     * Get bankTransferInstrKey3 value
     * @return string|null
     */
    public function getBankTransferInstrKey3(): ?string
    {
        return $this->bankTransferInstrKey3;
    }
    /**
     * Set bankTransferInstrKey3 value
     * @param string $bankTransferInstrKey3
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setBankTransferInstrKey3(?string $bankTransferInstrKey3 = null): self
    {
        // validation for constraint: string
        if (!is_null($bankTransferInstrKey3) && !is_string($bankTransferInstrKey3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankTransferInstrKey3, true), gettype($bankTransferInstrKey3)), __LINE__);
        }
        $this->bankTransferInstrKey3 = $bankTransferInstrKey3;
        
        return $this;
    }
    /**
     * Get bankTransferInstrKey4 value
     * @return string|null
     */
    public function getBankTransferInstrKey4(): ?string
    {
        return $this->bankTransferInstrKey4;
    }
    /**
     * Set bankTransferInstrKey4 value
     * @param string $bankTransferInstrKey4
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setBankTransferInstrKey4(?string $bankTransferInstrKey4 = null): self
    {
        // validation for constraint: string
        if (!is_null($bankTransferInstrKey4) && !is_string($bankTransferInstrKey4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankTransferInstrKey4, true), gettype($bankTransferInstrKey4)), __LINE__);
        }
        $this->bankTransferInstrKey4 = $bankTransferInstrKey4;
        
        return $this;
    }
    /**
     * Get bankTransferProt value
     * @return int|null
     */
    public function getBankTransferProt(): ?int
    {
        return $this->bankTransferProt;
    }
    /**
     * Set bankTransferProt value
     * @param int $bankTransferProt
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setBankTransferProt(?int $bankTransferProt = null): self
    {
        // validation for constraint: int
        if (!is_null($bankTransferProt) && !(is_int($bankTransferProt) || ctype_digit($bankTransferProt))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bankTransferProt, true), gettype($bankTransferProt)), __LINE__);
        }
        $this->bankTransferProt = $bankTransferProt;
        
        return $this;
    }
    /**
     * Get bankTransferType value
     * @return string|null
     */
    public function getBankTransferType(): ?string
    {
        return $this->bankTransferType;
    }
    /**
     * Set bankTransferType value
     * @param string $bankTransferType
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setBankTransferType(?string $bankTransferType = null): self
    {
        // validation for constraint: string
        if (!is_null($bankTransferType) && !is_string($bankTransferType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankTransferType, true), gettype($bankTransferType)), __LINE__);
        }
        $this->bankTransferType = $bankTransferType;
        
        return $this;
    }
    /**
     * Get billPerPassenger value
     * @return bool|null
     */
    public function getBillPerPassenger(): ?bool
    {
        return $this->billPerPassenger;
    }
    /**
     * Set billPerPassenger value
     * @param bool $billPerPassenger
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setBillPerPassenger(?bool $billPerPassenger = null): self
    {
        // validation for constraint: boolean
        if (!is_null($billPerPassenger) && !is_bool($billPerPassenger)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($billPerPassenger, true), gettype($billPerPassenger)), __LINE__);
        }
        $this->billPerPassenger = $billPerPassenger;
        
        return $this;
    }
    /**
     * Get billPerPassengerPaymentOfTicket value
     * @return bool|null
     */
    public function getBillPerPassengerPaymentOfTicket(): ?bool
    {
        return $this->billPerPassengerPaymentOfTicket;
    }
    /**
     * Set billPerPassengerPaymentOfTicket value
     * @param bool $billPerPassengerPaymentOfTicket
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setBillPerPassengerPaymentOfTicket(?bool $billPerPassengerPaymentOfTicket = null): self
    {
        // validation for constraint: boolean
        if (!is_null($billPerPassengerPaymentOfTicket) && !is_bool($billPerPassengerPaymentOfTicket)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($billPerPassengerPaymentOfTicket, true), gettype($billPerPassengerPaymentOfTicket)), __LINE__);
        }
        $this->billPerPassengerPaymentOfTicket = $billPerPassengerPaymentOfTicket;
        
        return $this;
    }
    /**
     * Get ccPrintSignature value
     * @return int|null
     */
    public function getCcPrintSignature(): ?int
    {
        return $this->ccPrintSignature;
    }
    /**
     * Set ccPrintSignature value
     * @param int $ccPrintSignature
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setCcPrintSignature(?int $ccPrintSignature = null): self
    {
        // validation for constraint: int
        if (!is_null($ccPrintSignature) && !(is_int($ccPrintSignature) || ctype_digit($ccPrintSignature))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccPrintSignature, true), gettype($ccPrintSignature)), __LINE__);
        }
        $this->ccPrintSignature = $ccPrintSignature;
        
        return $this;
    }
    /**
     * Get chargesGroup value
     * @return string|null
     */
    public function getChargesGroup(): ?string
    {
        return $this->chargesGroup;
    }
    /**
     * Set chargesGroup value
     * @param string $chargesGroup
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setChargesGroup(?string $chargesGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($chargesGroup) && !is_string($chargesGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($chargesGroup, true), gettype($chargesGroup)), __LINE__);
        }
        $this->chargesGroup = $chargesGroup;
        
        return $this;
    }
    /**
     * Get chequeCreditPayment value
     * @return bool|null
     */
    public function getChequeCreditPayment(): ?bool
    {
        return $this->chequeCreditPayment;
    }
    /**
     * Set chequeCreditPayment value
     * @param bool $chequeCreditPayment
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setChequeCreditPayment(?bool $chequeCreditPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($chequeCreditPayment) && !is_bool($chequeCreditPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($chequeCreditPayment, true), gettype($chequeCreditPayment)), __LINE__);
        }
        $this->chequeCreditPayment = $chequeCreditPayment;
        
        return $this;
    }
    /**
     * Get collectiveInvoice value
     * @return bool|null
     */
    public function getCollectiveInvoice(): ?bool
    {
        return $this->collectiveInvoice;
    }
    /**
     * Set collectiveInvoice value
     * @param bool $collectiveInvoice
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setCollectiveInvoice(?bool $collectiveInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($collectiveInvoice) && !is_bool($collectiveInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($collectiveInvoice, true), gettype($collectiveInvoice)), __LINE__);
        }
        $this->collectiveInvoice = $collectiveInvoice;
        
        return $this;
    }
    /**
     * Get collectiveInvoiceType value
     * @return string|null
     */
    public function getCollectiveInvoiceType(): ?string
    {
        return $this->collectiveInvoiceType;
    }
    /**
     * Set collectiveInvoiceType value
     * @param string $collectiveInvoiceType
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setCollectiveInvoiceType(?string $collectiveInvoiceType = null): self
    {
        // validation for constraint: string
        if (!is_null($collectiveInvoiceType) && !is_string($collectiveInvoiceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($collectiveInvoiceType, true), gettype($collectiveInvoiceType)), __LINE__);
        }
        $this->collectiveInvoiceType = $collectiveInvoiceType;
        
        return $this;
    }
    /**
     * Get companyUsage value
     * @return bool|null
     */
    public function getCompanyUsage(): ?bool
    {
        return $this->companyUsage;
    }
    /**
     * Set companyUsage value
     * @param bool $companyUsage
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setCompanyUsage(?bool $companyUsage = null): self
    {
        // validation for constraint: boolean
        if (!is_null($companyUsage) && !is_bool($companyUsage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($companyUsage, true), gettype($companyUsage)), __LINE__);
        }
        $this->companyUsage = $companyUsage;
        
        return $this;
    }
    /**
     * Get concernId value
     * @return string|null
     */
    public function getConcernId(): ?string
    {
        return $this->concernId;
    }
    /**
     * Set concernId value
     * @param string $concernId
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setConcernId(?string $concernId = null): self
    {
        // validation for constraint: string
        if (!is_null($concernId) && !is_string($concernId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($concernId, true), gettype($concernId)), __LINE__);
        }
        $this->concernId = $concernId;
        
        return $this;
    }
    /**
     * Get creditLimit value
     * @return float|null
     */
    public function getCreditLimit(): ?float
    {
        return $this->creditLimit;
    }
    /**
     * Set creditLimit value
     * @param float $creditLimit
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setCreditLimit(?float $creditLimit = null): self
    {
        // validation for constraint: float
        if (!is_null($creditLimit) && !(is_float($creditLimit) || is_numeric($creditLimit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($creditLimit, true), gettype($creditLimit)), __LINE__);
        }
        $this->creditLimit = $creditLimit;
        
        return $this;
    }
    /**
     * Get creditLimitWarningPercent value
     * @return float|null
     */
    public function getCreditLimitWarningPercent(): ?float
    {
        return $this->creditLimitWarningPercent;
    }
    /**
     * Set creditLimitWarningPercent value
     * @param float $creditLimitWarningPercent
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setCreditLimitWarningPercent(?float $creditLimitWarningPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($creditLimitWarningPercent) && !(is_float($creditLimitWarningPercent) || is_numeric($creditLimitWarningPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($creditLimitWarningPercent, true), gettype($creditLimitWarningPercent)), __LINE__);
        }
        $this->creditLimitWarningPercent = $creditLimitWarningPercent;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
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
     * Get directDebit value
     * @return bool|null
     */
    public function getDirectDebit(): ?bool
    {
        return $this->directDebit;
    }
    /**
     * Set directDebit value
     * @param bool $directDebit
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setDirectDebit(?bool $directDebit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($directDebit) && !is_bool($directDebit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($directDebit, true), gettype($directDebit)), __LINE__);
        }
        $this->directDebit = $directDebit;
        
        return $this;
    }
    /**
     * Get directDebitDate value
     * @return string|null
     */
    public function getDirectDebitDate(): ?string
    {
        return $this->directDebitDate;
    }
    /**
     * Set directDebitDate value
     * @param string $directDebitDate
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setDirectDebitDate(?string $directDebitDate = null): self
    {
        // validation for constraint: string
        if (!is_null($directDebitDate) && !is_string($directDebitDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($directDebitDate, true), gettype($directDebitDate)), __LINE__);
        }
        $this->directDebitDate = $directDebitDate;
        
        return $this;
    }
    /**
     * Get disableCommissionOnVoid value
     * @return bool|null
     */
    public function getDisableCommissionOnVoid(): ?bool
    {
        return $this->disableCommissionOnVoid;
    }
    /**
     * Set disableCommissionOnVoid value
     * @param bool $disableCommissionOnVoid
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setDisableCommissionOnVoid(?bool $disableCommissionOnVoid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($disableCommissionOnVoid) && !is_bool($disableCommissionOnVoid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($disableCommissionOnVoid, true), gettype($disableCommissionOnVoid)), __LINE__);
        }
        $this->disableCommissionOnVoid = $disableCommissionOnVoid;
        
        return $this;
    }
    /**
     * Get disableProvisionPayment value
     * @return bool|null
     */
    public function getDisableProvisionPayment(): ?bool
    {
        return $this->disableProvisionPayment;
    }
    /**
     * Set disableProvisionPayment value
     * @param bool $disableProvisionPayment
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setDisableProvisionPayment(?bool $disableProvisionPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($disableProvisionPayment) && !is_bool($disableProvisionPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($disableProvisionPayment, true), gettype($disableProvisionPayment)), __LINE__);
        }
        $this->disableProvisionPayment = $disableProvisionPayment;
        
        return $this;
    }
    /**
     * Get documentCopies value
     * @return int|null
     */
    public function getDocumentCopies(): ?int
    {
        return $this->documentCopies;
    }
    /**
     * Set documentCopies value
     * @param int $documentCopies
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setDocumentCopies(?int $documentCopies = null): self
    {
        // validation for constraint: int
        if (!is_null($documentCopies) && !(is_int($documentCopies) || ctype_digit($documentCopies))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentCopies, true), gettype($documentCopies)), __LINE__);
        }
        $this->documentCopies = $documentCopies;
        
        return $this;
    }
    /**
     * Get eftCreditPayment value
     * @return bool|null
     */
    public function getEftCreditPayment(): ?bool
    {
        return $this->eftCreditPayment;
    }
    /**
     * Set eftCreditPayment value
     * @param bool $eftCreditPayment
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setEftCreditPayment(?bool $eftCreditPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eftCreditPayment) && !is_bool($eftCreditPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eftCreditPayment, true), gettype($eftCreditPayment)), __LINE__);
        }
        $this->eftCreditPayment = $eftCreditPayment;
        
        return $this;
    }
    /**
     * Get eftDebitPayment value
     * @return bool|null
     */
    public function getEftDebitPayment(): ?bool
    {
        return $this->eftDebitPayment;
    }
    /**
     * Set eftDebitPayment value
     * @param bool $eftDebitPayment
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setEftDebitPayment(?bool $eftDebitPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eftDebitPayment) && !is_bool($eftDebitPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eftDebitPayment, true), gettype($eftDebitPayment)), __LINE__);
        }
        $this->eftDebitPayment = $eftDebitPayment;
        
        return $this;
    }
    /**
     * Get foreignBankTransfer value
     * @return bool|null
     */
    public function getForeignBankTransfer(): ?bool
    {
        return $this->foreignBankTransfer;
    }
    /**
     * Set foreignBankTransfer value
     * @param bool $foreignBankTransfer
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setForeignBankTransfer(?bool $foreignBankTransfer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($foreignBankTransfer) && !is_bool($foreignBankTransfer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($foreignBankTransfer, true), gettype($foreignBankTransfer)), __LINE__);
        }
        $this->foreignBankTransfer = $foreignBankTransfer;
        
        return $this;
    }
    /**
     * Get hasBtContract value
     * @return bool|null
     */
    public function getHasBtContract(): ?bool
    {
        return $this->hasBtContract;
    }
    /**
     * Set hasBtContract value
     * @param bool $hasBtContract
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setHasBtContract(?bool $hasBtContract = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasBtContract) && !is_bool($hasBtContract)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasBtContract, true), gettype($hasBtContract)), __LINE__);
        }
        $this->hasBtContract = $hasBtContract;
        
        return $this;
    }
    /**
     * Get invoiceAsEmail value
     * @return bool|null
     */
    public function getInvoiceAsEmail(): ?bool
    {
        return $this->invoiceAsEmail;
    }
    /**
     * Set invoiceAsEmail value
     * @param bool $invoiceAsEmail
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setInvoiceAsEmail(?bool $invoiceAsEmail = null): self
    {
        // validation for constraint: boolean
        if (!is_null($invoiceAsEmail) && !is_bool($invoiceAsEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($invoiceAsEmail, true), gettype($invoiceAsEmail)), __LINE__);
        }
        $this->invoiceAsEmail = $invoiceAsEmail;
        
        return $this;
    }
    /**
     * Get invoiceFileFormatId value
     * @return string|null
     */
    public function getInvoiceFileFormatId(): ?string
    {
        return $this->invoiceFileFormatId;
    }
    /**
     * Set invoiceFileFormatId value
     * @param string $invoiceFileFormatId
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setInvoiceFileFormatId(?string $invoiceFileFormatId = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceFileFormatId) && !is_string($invoiceFileFormatId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceFileFormatId, true), gettype($invoiceFileFormatId)), __LINE__);
        }
        $this->invoiceFileFormatId = $invoiceFileFormatId;
        
        return $this;
    }
    /**
     * Get isDunningBlock value
     * @return bool|null
     */
    public function getIsDunningBlock(): ?bool
    {
        return $this->isDunningBlock;
    }
    /**
     * Set isDunningBlock value
     * @param bool $isDunningBlock
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setIsDunningBlock(?bool $isDunningBlock = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDunningBlock) && !is_bool($isDunningBlock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDunningBlock, true), gettype($isDunningBlock)), __LINE__);
        }
        $this->isDunningBlock = $isDunningBlock;
        
        return $this;
    }
    /**
     * Get isReverseCharge value
     * @return bool|null
     */
    public function getIsReverseCharge(): ?bool
    {
        return $this->isReverseCharge;
    }
    /**
     * Set isReverseCharge value
     * @param bool $isReverseCharge
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setIsReverseCharge(?bool $isReverseCharge = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isReverseCharge) && !is_bool($isReverseCharge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReverseCharge, true), gettype($isReverseCharge)), __LINE__);
        }
        $this->isReverseCharge = $isReverseCharge;
        
        return $this;
    }
    /**
     * Get methodOfPayment value
     * @return string|null
     */
    public function getMethodOfPayment(): ?string
    {
        return $this->methodOfPayment;
    }
    /**
     * Set methodOfPayment value
     * @param string $methodOfPayment
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setMethodOfPayment(?string $methodOfPayment = null): self
    {
        // validation for constraint: string
        if (!is_null($methodOfPayment) && !is_string($methodOfPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($methodOfPayment, true), gettype($methodOfPayment)), __LINE__);
        }
        $this->methodOfPayment = $methodOfPayment;
        
        return $this;
    }
    /**
     * Get noPaymentMethod value
     * @return bool|null
     */
    public function getNoPaymentMethod(): ?bool
    {
        return $this->noPaymentMethod;
    }
    /**
     * Set noPaymentMethod value
     * @param bool $noPaymentMethod
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setNoPaymentMethod(?bool $noPaymentMethod = null): self
    {
        // validation for constraint: boolean
        if (!is_null($noPaymentMethod) && !is_bool($noPaymentMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($noPaymentMethod, true), gettype($noPaymentMethod)), __LINE__);
        }
        $this->noPaymentMethod = $noPaymentMethod;
        
        return $this;
    }
    /**
     * Get outgoingBankTransfer value
     * @return bool|null
     */
    public function getOutgoingBankTransfer(): ?bool
    {
        return $this->outgoingBankTransfer;
    }
    /**
     * Set outgoingBankTransfer value
     * @param bool $outgoingBankTransfer
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setOutgoingBankTransfer(?bool $outgoingBankTransfer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($outgoingBankTransfer) && !is_bool($outgoingBankTransfer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($outgoingBankTransfer, true), gettype($outgoingBankTransfer)), __LINE__);
        }
        $this->outgoingBankTransfer = $outgoingBankTransfer;
        
        return $this;
    }
    /**
     * Get paymentConditionId value
     * @return string|null
     */
    public function getPaymentConditionId(): ?string
    {
        return $this->paymentConditionId;
    }
    /**
     * Set paymentConditionId value
     * @param string $paymentConditionId
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setPaymentConditionId(?string $paymentConditionId = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentConditionId) && !is_string($paymentConditionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentConditionId, true), gettype($paymentConditionId)), __LINE__);
        }
        $this->paymentConditionId = $paymentConditionId;
        
        return $this;
    }
    /**
     * Get paymentDelay value
     * @return int|null
     */
    public function getPaymentDelay(): ?int
    {
        return $this->paymentDelay;
    }
    /**
     * Set paymentDelay value
     * @param int $paymentDelay
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setPaymentDelay(?int $paymentDelay = null): self
    {
        // validation for constraint: int
        if (!is_null($paymentDelay) && !(is_int($paymentDelay) || ctype_digit($paymentDelay))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentDelay, true), gettype($paymentDelay)), __LINE__);
        }
        $this->paymentDelay = $paymentDelay;
        
        return $this;
    }
    /**
     * Get paymentForcedCcCardId value
     * @return int|null
     */
    public function getPaymentForcedCcCardId(): ?int
    {
        return $this->paymentForcedCcCardId;
    }
    /**
     * Set paymentForcedCcCardId value
     * @param int $paymentForcedCcCardId
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setPaymentForcedCcCardId(?int $paymentForcedCcCardId = null): self
    {
        // validation for constraint: int
        if (!is_null($paymentForcedCcCardId) && !(is_int($paymentForcedCcCardId) || ctype_digit($paymentForcedCcCardId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentForcedCcCardId, true), gettype($paymentForcedCcCardId)), __LINE__);
        }
        $this->paymentForcedCcCardId = $paymentForcedCcCardId;
        
        return $this;
    }
    /**
     * Get paymentForcedDebitCardId value
     * @return int|null
     */
    public function getPaymentForcedDebitCardId(): ?int
    {
        return $this->paymentForcedDebitCardId;
    }
    /**
     * Set paymentForcedDebitCardId value
     * @param int $paymentForcedDebitCardId
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setPaymentForcedDebitCardId(?int $paymentForcedDebitCardId = null): self
    {
        // validation for constraint: int
        if (!is_null($paymentForcedDebitCardId) && !(is_int($paymentForcedDebitCardId) || ctype_digit($paymentForcedDebitCardId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentForcedDebitCardId, true), gettype($paymentForcedDebitCardId)), __LINE__);
        }
        $this->paymentForcedDebitCardId = $paymentForcedDebitCardId;
        
        return $this;
    }
    /**
     * Get paymentForcedType value
     * @return string|null
     */
    public function getPaymentForcedType(): ?string
    {
        return $this->paymentForcedType;
    }
    /**
     * Set paymentForcedType value
     * @param string $paymentForcedType
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setPaymentForcedType(?string $paymentForcedType = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentForcedType) && !is_string($paymentForcedType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentForcedType, true), gettype($paymentForcedType)), __LINE__);
        }
        $this->paymentForcedType = $paymentForcedType;
        
        return $this;
    }
    /**
     * Get prepayment value
     * @return bool|null
     */
    public function getPrepayment(): ?bool
    {
        return $this->prepayment;
    }
    /**
     * Set prepayment value
     * @param bool $prepayment
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setPrepayment(?bool $prepayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($prepayment) && !is_bool($prepayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prepayment, true), gettype($prepayment)), __LINE__);
        }
        $this->prepayment = $prepayment;
        
        return $this;
    }
    /**
     * Get printOptionId value
     * @return int|null
     */
    public function getPrintOptionId(): ?int
    {
        return $this->printOptionId;
    }
    /**
     * Set printOptionId value
     * @param int $printOptionId
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setPrintOptionId(?int $printOptionId = null): self
    {
        // validation for constraint: int
        if (!is_null($printOptionId) && !(is_int($printOptionId) || ctype_digit($printOptionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printOptionId, true), gettype($printOptionId)), __LINE__);
        }
        $this->printOptionId = $printOptionId;
        
        return $this;
    }
    /**
     * Get qrInvoiceTransfer value
     * @return bool|null
     */
    public function getQrInvoiceTransfer(): ?bool
    {
        return $this->qrInvoiceTransfer;
    }
    /**
     * Set qrInvoiceTransfer value
     * @param bool $qrInvoiceTransfer
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setQrInvoiceTransfer(?bool $qrInvoiceTransfer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($qrInvoiceTransfer) && !is_bool($qrInvoiceTransfer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($qrInvoiceTransfer, true), gettype($qrInvoiceTransfer)), __LINE__);
        }
        $this->qrInvoiceTransfer = $qrInvoiceTransfer;
        
        return $this;
    }
    /**
     * Get rebateAllowed value
     * @return bool|null
     */
    public function getRebateAllowed(): ?bool
    {
        return $this->rebateAllowed;
    }
    /**
     * Set rebateAllowed value
     * @param bool $rebateAllowed
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setRebateAllowed(?bool $rebateAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($rebateAllowed) && !is_bool($rebateAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($rebateAllowed, true), gettype($rebateAllowed)), __LINE__);
        }
        $this->rebateAllowed = $rebateAllowed;
        
        return $this;
    }
    /**
     * Get sendCsvInvoice value
     * @return bool|null
     */
    public function getSendCsvInvoice(): ?bool
    {
        return $this->sendCsvInvoice;
    }
    /**
     * Set sendCsvInvoice value
     * @param bool $sendCsvInvoice
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setSendCsvInvoice(?bool $sendCsvInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sendCsvInvoice) && !is_bool($sendCsvInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sendCsvInvoice, true), gettype($sendCsvInvoice)), __LINE__);
        }
        $this->sendCsvInvoice = $sendCsvInvoice;
        
        return $this;
    }
    /**
     * Get sepaDebit value
     * @return bool|null
     */
    public function getSepaDebit(): ?bool
    {
        return $this->sepaDebit;
    }
    /**
     * Set sepaDebit value
     * @param bool $sepaDebit
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setSepaDebit(?bool $sepaDebit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sepaDebit) && !is_bool($sepaDebit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sepaDebit, true), gettype($sepaDebit)), __LINE__);
        }
        $this->sepaDebit = $sepaDebit;
        
        return $this;
    }
    /**
     * Get sepaTransfer value
     * @return bool|null
     */
    public function getSepaTransfer(): ?bool
    {
        return $this->sepaTransfer;
    }
    /**
     * Set sepaTransfer value
     * @param bool $sepaTransfer
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setSepaTransfer(?bool $sepaTransfer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sepaTransfer) && !is_bool($sepaTransfer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sepaTransfer, true), gettype($sepaTransfer)), __LINE__);
        }
        $this->sepaTransfer = $sepaTransfer;
        
        return $this;
    }
    /**
     * Get smallBusiness value
     * @return bool|null
     */
    public function getSmallBusiness(): ?bool
    {
        return $this->smallBusiness;
    }
    /**
     * Set smallBusiness value
     * @param bool $smallBusiness
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setSmallBusiness(?bool $smallBusiness = null): self
    {
        // validation for constraint: boolean
        if (!is_null($smallBusiness) && !is_bool($smallBusiness)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($smallBusiness, true), gettype($smallBusiness)), __LINE__);
        }
        $this->smallBusiness = $smallBusiness;
        
        return $this;
    }
    /**
     * Get swissCreditPayment value
     * @return bool|null
     */
    public function getSwissCreditPayment(): ?bool
    {
        return $this->swissCreditPayment;
    }
    /**
     * Set swissCreditPayment value
     * @param bool $swissCreditPayment
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setSwissCreditPayment(?bool $swissCreditPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($swissCreditPayment) && !is_bool($swissCreditPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($swissCreditPayment, true), gettype($swissCreditPayment)), __LINE__);
        }
        $this->swissCreditPayment = $swissCreditPayment;
        
        return $this;
    }
    /**
     * Get swissDebitPayment value
     * @return bool|null
     */
    public function getSwissDebitPayment(): ?bool
    {
        return $this->swissDebitPayment;
    }
    /**
     * Set swissDebitPayment value
     * @param bool $swissDebitPayment
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setSwissDebitPayment(?bool $swissDebitPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($swissDebitPayment) && !is_bool($swissDebitPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($swissDebitPayment, true), gettype($swissDebitPayment)), __LINE__);
        }
        $this->swissDebitPayment = $swissDebitPayment;
        
        return $this;
    }
    /**
     * Get vatCodeSales value
     * @return string|null
     */
    public function getVatCodeSales(): ?string
    {
        return $this->vatCodeSales;
    }
    /**
     * Set vatCodeSales value
     * @param string $vatCodeSales
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setVatCodeSales(?string $vatCodeSales = null): self
    {
        // validation for constraint: string
        if (!is_null($vatCodeSales) && !is_string($vatCodeSales)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCodeSales, true), gettype($vatCodeSales)), __LINE__);
        }
        $this->vatCodeSales = $vatCodeSales;
        
        return $this;
    }
    /**
     * Get vatLiability value
     * @return bool|null
     */
    public function getVatLiability(): ?bool
    {
        return $this->vatLiability;
    }
    /**
     * Set vatLiability value
     * @param bool $vatLiability
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setVatLiability(?bool $vatLiability = null): self
    {
        // validation for constraint: boolean
        if (!is_null($vatLiability) && !is_bool($vatLiability)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vatLiability, true), gettype($vatLiability)), __LINE__);
        }
        $this->vatLiability = $vatLiability;
        
        return $this;
    }
    /**
     * Get vatOrganic value
     * @return bool|null
     */
    public function getVatOrganic(): ?bool
    {
        return $this->vatOrganic;
    }
    /**
     * Set vatOrganic value
     * @param bool $vatOrganic
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setVatOrganic(?bool $vatOrganic = null): self
    {
        // validation for constraint: boolean
        if (!is_null($vatOrganic) && !is_bool($vatOrganic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vatOrganic, true), gettype($vatOrganic)), __LINE__);
        }
        $this->vatOrganic = $vatOrganic;
        
        return $this;
    }
    /**
     * Get wireCreditPayment value
     * @return bool|null
     */
    public function getWireCreditPayment(): ?bool
    {
        return $this->wireCreditPayment;
    }
    /**
     * Set wireCreditPayment value
     * @param bool $wireCreditPayment
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setWireCreditPayment(?bool $wireCreditPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($wireCreditPayment) && !is_bool($wireCreditPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wireCreditPayment, true), gettype($wireCreditPayment)), __LINE__);
        }
        $this->wireCreditPayment = $wireCreditPayment;
        
        return $this;
    }
    /**
     * Get wiseCreditPayment value
     * @return bool|null
     */
    public function getWiseCreditPayment(): ?bool
    {
        return $this->wiseCreditPayment;
    }
    /**
     * Set wiseCreditPayment value
     * @param bool $wiseCreditPayment
     * @return \Pggns\MidocoApi\Mis\StructType\CrmCustomerPaymentDTO
     */
    public function setWiseCreditPayment(?bool $wiseCreditPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($wiseCreditPayment) && !is_bool($wiseCreditPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wiseCreditPayment, true), gettype($wiseCreditPayment)), __LINE__);
        }
        $this->wiseCreditPayment = $wiseCreditPayment;
        
        return $this;
    }
}
