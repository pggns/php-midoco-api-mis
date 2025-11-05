<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoSystemOrgunitClosingResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoSystemOrgunitClosingResponse extends AbstractStructBase
{
    /**
     * The MidocoSystemOrgunitClosing
     * Meta information extracted from the WSDL
     * - ref: MidocoSystemOrgunitClosing
     * @var \Pggns\MidocoApi\Mis\StructType\OrgunitClosingDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\OrgunitClosingDTO $MidocoSystemOrgunitClosing = null;
    /**
     * The errorInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $errorInfo = null;
    /**
     * Constructor method for SaveMidocoSystemOrgunitClosingResponse
     * @uses SaveMidocoSystemOrgunitClosingResponse::setMidocoSystemOrgunitClosing()
     * @uses SaveMidocoSystemOrgunitClosingResponse::setErrorInfo()
     * @param \Pggns\MidocoApi\Mis\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing
     * @param string[] $errorInfo
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing = null, ?array $errorInfo = null)
    {
        $this
            ->setMidocoSystemOrgunitClosing($midocoSystemOrgunitClosing)
            ->setErrorInfo($errorInfo);
    }
    /**
     * Get MidocoSystemOrgunitClosing value
     * @return \Pggns\MidocoApi\Mis\StructType\OrgunitClosingDTO|null
     */
    public function getMidocoSystemOrgunitClosing(): ?\Pggns\MidocoApi\Mis\StructType\OrgunitClosingDTO
    {
        return $this->MidocoSystemOrgunitClosing;
    }
    /**
     * Set MidocoSystemOrgunitClosing value
     * @param \Pggns\MidocoApi\Mis\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing
     * @return \Pggns\MidocoApi\Mis\StructType\SaveMidocoSystemOrgunitClosingResponse
     */
    public function setMidocoSystemOrgunitClosing(?\Pggns\MidocoApi\Mis\StructType\OrgunitClosingDTO $midocoSystemOrgunitClosing = null): self
    {
        $this->MidocoSystemOrgunitClosing = $midocoSystemOrgunitClosing;
        
        return $this;
    }
    /**
     * Get errorInfo value
     * @return string[]
     */
    public function getErrorInfo(): ?array
    {
        return $this->errorInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setErrorInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErrorInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorInfoForArrayConstraintFromSetErrorInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveMidocoSystemOrgunitClosingResponseErrorInfoItem) {
            // validation for constraint: itemType
            if (!is_string($saveMidocoSystemOrgunitClosingResponseErrorInfoItem)) {
                $invalidValues[] = is_object($saveMidocoSystemOrgunitClosingResponseErrorInfoItem) ? get_class($saveMidocoSystemOrgunitClosingResponseErrorInfoItem) : sprintf('%s(%s)', gettype($saveMidocoSystemOrgunitClosingResponseErrorInfoItem), var_export($saveMidocoSystemOrgunitClosingResponseErrorInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The errorInfo property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set errorInfo value
     * @throws InvalidArgumentException
     * @param string[] $errorInfo
     * @return \Pggns\MidocoApi\Mis\StructType\SaveMidocoSystemOrgunitClosingResponse
     */
    public function setErrorInfo(?array $errorInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($errorInfoArrayErrorMessage = self::validateErrorInfoForArrayConstraintFromSetErrorInfo($errorInfo))) {
            throw new InvalidArgumentException($errorInfoArrayErrorMessage, __LINE__);
        }
        $this->errorInfo = $errorInfo;
        
        return $this;
    }
    /**
     * Add item to errorInfo value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Mis\StructType\SaveMidocoSystemOrgunitClosingResponse
     */
    public function addToErrorInfo(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The errorInfo property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->errorInfo[] = $item;
        
        return $this;
    }
}
