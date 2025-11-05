<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Generate2FaAuthResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Generate2FaAuthResponse extends AbstractStructBase
{
    /**
     * The qrdata
     * @var string|null
     */
    protected ?string $qrdata = null;
    /**
     * The authCertificate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $authCertificate = null;
    /**
     * Constructor method for Generate2FaAuthResponse
     * @uses Generate2FaAuthResponse::setQrdata()
     * @uses Generate2FaAuthResponse::setAuthCertificate()
     * @param string $qrdata
     * @param string $authCertificate
     */
    public function __construct(?string $qrdata = null, ?string $authCertificate = null)
    {
        $this
            ->setQrdata($qrdata)
            ->setAuthCertificate($authCertificate);
    }
    /**
     * Get qrdata value
     * @return string|null
     */
    public function getQrdata(): ?string
    {
        return $this->qrdata;
    }
    /**
     * Set qrdata value
     * @param string $qrdata
     * @return \Pggns\MidocoApi\Mis\StructType\Generate2FaAuthResponse
     */
    public function setQrdata(?string $qrdata = null): self
    {
        // validation for constraint: string
        if (!is_null($qrdata) && !is_string($qrdata)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($qrdata, true), gettype($qrdata)), __LINE__);
        }
        $this->qrdata = $qrdata;
        
        return $this;
    }
    /**
     * Get authCertificate value
     * @return string|null
     */
    public function getAuthCertificate(): ?string
    {
        return $this->authCertificate;
    }
    /**
     * Set authCertificate value
     * @param string $authCertificate
     * @return \Pggns\MidocoApi\Mis\StructType\Generate2FaAuthResponse
     */
    public function setAuthCertificate(?string $authCertificate = null): self
    {
        // validation for constraint: string
        if (!is_null($authCertificate) && !is_string($authCertificate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authCertificate, true), gettype($authCertificate)), __LINE__);
        }
        $this->authCertificate = $authCertificate;
        
        return $this;
    }
}
