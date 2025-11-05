<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoHttpRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoHttpRequest extends AbstractStructBase
{
    /**
     * The MidocoHttpHeader
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoHttpHeader
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoHttpHeader[]
     */
    protected ?array $MidocoHttpHeader = null;
    /**
     * The MidocoHttpParameter
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoHttpParameter
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoHttpParameter[]
     */
    protected ?array $MidocoHttpParameter = null;
    /**
     * The payload
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $payload = null;
    /**
     * The entryPoint
     * @var string|null
     */
    protected ?string $entryPoint = null;
    /**
     * The method
     * @var string|null
     */
    protected ?string $method = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The remoteAddress
     * @var string|null
     */
    protected ?string $remoteAddress = null;
    /**
     * The remoteHost
     * @var string|null
     */
    protected ?string $remoteHost = null;
    /**
     * The remoteUser
     * @var string|null
     */
    protected ?string $remoteUser = null;
    /**
     * Constructor method for MidocoHttpRequest
     * @uses MidocoHttpRequest::setMidocoHttpHeader()
     * @uses MidocoHttpRequest::setMidocoHttpParameter()
     * @uses MidocoHttpRequest::setPayload()
     * @uses MidocoHttpRequest::setEntryPoint()
     * @uses MidocoHttpRequest::setMethod()
     * @uses MidocoHttpRequest::setTimestamp()
     * @uses MidocoHttpRequest::setRemoteAddress()
     * @uses MidocoHttpRequest::setRemoteHost()
     * @uses MidocoHttpRequest::setRemoteUser()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoHttpHeader[] $midocoHttpHeader
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoHttpParameter[] $midocoHttpParameter
     * @param string $payload
     * @param string $entryPoint
     * @param string $method
     * @param string $timestamp
     * @param string $remoteAddress
     * @param string $remoteHost
     * @param string $remoteUser
     */
    public function __construct(?array $midocoHttpHeader = null, ?array $midocoHttpParameter = null, ?string $payload = null, ?string $entryPoint = null, ?string $method = null, ?string $timestamp = null, ?string $remoteAddress = null, ?string $remoteHost = null, ?string $remoteUser = null)
    {
        $this
            ->setMidocoHttpHeader($midocoHttpHeader)
            ->setMidocoHttpParameter($midocoHttpParameter)
            ->setPayload($payload)
            ->setEntryPoint($entryPoint)
            ->setMethod($method)
            ->setTimestamp($timestamp)
            ->setRemoteAddress($remoteAddress)
            ->setRemoteHost($remoteHost)
            ->setRemoteUser($remoteUser);
    }
    /**
     * Get MidocoHttpHeader value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoHttpHeader[]
     */
    public function getMidocoHttpHeader(): ?array
    {
        return $this->MidocoHttpHeader;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoHttpHeader method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoHttpHeader method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoHttpHeaderForArrayConstraintFromSetMidocoHttpHeader(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoHttpRequestMidocoHttpHeaderItem) {
            // validation for constraint: itemType
            if (!$midocoHttpRequestMidocoHttpHeaderItem instanceof \Pggns\MidocoApi\Mis\StructType\MidocoHttpHeader) {
                $invalidValues[] = is_object($midocoHttpRequestMidocoHttpHeaderItem) ? get_class($midocoHttpRequestMidocoHttpHeaderItem) : sprintf('%s(%s)', gettype($midocoHttpRequestMidocoHttpHeaderItem), var_export($midocoHttpRequestMidocoHttpHeaderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoHttpHeader property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoHttpHeader, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoHttpHeader value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoHttpHeader[] $midocoHttpHeader
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoHttpRequest
     */
    public function setMidocoHttpHeader(?array $midocoHttpHeader = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoHttpHeaderArrayErrorMessage = self::validateMidocoHttpHeaderForArrayConstraintFromSetMidocoHttpHeader($midocoHttpHeader))) {
            throw new InvalidArgumentException($midocoHttpHeaderArrayErrorMessage, __LINE__);
        }
        $this->MidocoHttpHeader = $midocoHttpHeader;
        
        return $this;
    }
    /**
     * Add item to MidocoHttpHeader value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoHttpHeader $item
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoHttpRequest
     */
    public function addToMidocoHttpHeader(\Pggns\MidocoApi\Mis\StructType\MidocoHttpHeader $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MidocoHttpHeader) {
            throw new InvalidArgumentException(sprintf('The MidocoHttpHeader property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoHttpHeader, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoHttpHeader[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoHttpParameter value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoHttpParameter[]
     */
    public function getMidocoHttpParameter(): ?array
    {
        return $this->MidocoHttpParameter;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoHttpParameter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoHttpParameter method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoHttpParameterForArrayConstraintFromSetMidocoHttpParameter(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoHttpRequestMidocoHttpParameterItem) {
            // validation for constraint: itemType
            if (!$midocoHttpRequestMidocoHttpParameterItem instanceof \Pggns\MidocoApi\Mis\StructType\MidocoHttpParameter) {
                $invalidValues[] = is_object($midocoHttpRequestMidocoHttpParameterItem) ? get_class($midocoHttpRequestMidocoHttpParameterItem) : sprintf('%s(%s)', gettype($midocoHttpRequestMidocoHttpParameterItem), var_export($midocoHttpRequestMidocoHttpParameterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoHttpParameter property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoHttpParameter, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoHttpParameter value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoHttpParameter[] $midocoHttpParameter
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoHttpRequest
     */
    public function setMidocoHttpParameter(?array $midocoHttpParameter = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoHttpParameterArrayErrorMessage = self::validateMidocoHttpParameterForArrayConstraintFromSetMidocoHttpParameter($midocoHttpParameter))) {
            throw new InvalidArgumentException($midocoHttpParameterArrayErrorMessage, __LINE__);
        }
        $this->MidocoHttpParameter = $midocoHttpParameter;
        
        return $this;
    }
    /**
     * Add item to MidocoHttpParameter value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoHttpParameter $item
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoHttpRequest
     */
    public function addToMidocoHttpParameter(\Pggns\MidocoApi\Mis\StructType\MidocoHttpParameter $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MidocoHttpParameter) {
            throw new InvalidArgumentException(sprintf('The MidocoHttpParameter property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoHttpParameter, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoHttpParameter[] = $item;
        
        return $this;
    }
    /**
     * Get payload value
     * @return string|null
     */
    public function getPayload(): ?string
    {
        return $this->payload;
    }
    /**
     * Set payload value
     * @param string $payload
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoHttpRequest
     */
    public function setPayload(?string $payload = null): self
    {
        // validation for constraint: string
        if (!is_null($payload) && !is_string($payload)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payload, true), gettype($payload)), __LINE__);
        }
        $this->payload = $payload;
        
        return $this;
    }
    /**
     * Get entryPoint value
     * @return string|null
     */
    public function getEntryPoint(): ?string
    {
        return $this->entryPoint;
    }
    /**
     * Set entryPoint value
     * @param string $entryPoint
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoHttpRequest
     */
    public function setEntryPoint(?string $entryPoint = null): self
    {
        // validation for constraint: string
        if (!is_null($entryPoint) && !is_string($entryPoint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entryPoint, true), gettype($entryPoint)), __LINE__);
        }
        $this->entryPoint = $entryPoint;
        
        return $this;
    }
    /**
     * Get method value
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }
    /**
     * Set method value
     * @param string $method
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoHttpRequest
     */
    public function setMethod(?string $method = null): self
    {
        // validation for constraint: string
        if (!is_null($method) && !is_string($method)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($method, true), gettype($method)), __LINE__);
        }
        $this->method = $method;
        
        return $this;
    }
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoHttpRequest
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        
        return $this;
    }
    /**
     * Get remoteAddress value
     * @return string|null
     */
    public function getRemoteAddress(): ?string
    {
        return $this->remoteAddress;
    }
    /**
     * Set remoteAddress value
     * @param string $remoteAddress
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoHttpRequest
     */
    public function setRemoteAddress(?string $remoteAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($remoteAddress) && !is_string($remoteAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remoteAddress, true), gettype($remoteAddress)), __LINE__);
        }
        $this->remoteAddress = $remoteAddress;
        
        return $this;
    }
    /**
     * Get remoteHost value
     * @return string|null
     */
    public function getRemoteHost(): ?string
    {
        return $this->remoteHost;
    }
    /**
     * Set remoteHost value
     * @param string $remoteHost
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoHttpRequest
     */
    public function setRemoteHost(?string $remoteHost = null): self
    {
        // validation for constraint: string
        if (!is_null($remoteHost) && !is_string($remoteHost)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remoteHost, true), gettype($remoteHost)), __LINE__);
        }
        $this->remoteHost = $remoteHost;
        
        return $this;
    }
    /**
     * Get remoteUser value
     * @return string|null
     */
    public function getRemoteUser(): ?string
    {
        return $this->remoteUser;
    }
    /**
     * Set remoteUser value
     * @param string $remoteUser
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoHttpRequest
     */
    public function setRemoteUser(?string $remoteUser = null): self
    {
        // validation for constraint: string
        if (!is_null($remoteUser) && !is_string($remoteUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remoteUser, true), gettype($remoteUser)), __LINE__);
        }
        $this->remoteUser = $remoteUser;
        
        return $this;
    }
}
