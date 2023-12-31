<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoJasperReportParamList StructType
 * @subpackage Structs
 */
class MidocoJasperReportParamList extends AbstractStructBase
{
    /**
     * The MidocoJasperReportParamValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: system:MidocoJasperReportParamValue
     * @var \Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO[]
     */
    protected array $MidocoJasperReportParamValue = [];
    /**
     * Constructor method for MidocoJasperReportParamList
     * @uses MidocoJasperReportParamList::setMidocoJasperReportParamValue()
     * @param \Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO[] $midocoJasperReportParamValue
     */
    public function __construct(array $midocoJasperReportParamValue = [])
    {
        $this
            ->setMidocoJasperReportParamValue($midocoJasperReportParamValue);
    }
    /**
     * Get MidocoJasperReportParamValue value
     * @return \Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO[]
     */
    public function getMidocoJasperReportParamValue(): array
    {
        return $this->MidocoJasperReportParamValue;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoJasperReportParamValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoJasperReportParamValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoJasperReportParamValueForArrayConstraintsFromSetMidocoJasperReportParamValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoJasperReportParamListMidocoJasperReportParamValueItem) {
            // validation for constraint: itemType
            if (!$midocoJasperReportParamListMidocoJasperReportParamValueItem instanceof \Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO) {
                $invalidValues[] = is_object($midocoJasperReportParamListMidocoJasperReportParamValueItem) ? get_class($midocoJasperReportParamListMidocoJasperReportParamValueItem) : sprintf('%s(%s)', gettype($midocoJasperReportParamListMidocoJasperReportParamValueItem), var_export($midocoJasperReportParamListMidocoJasperReportParamValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJasperReportParamValue property can only contain items of type \Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJasperReportParamValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO[] $midocoJasperReportParamValue
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoJasperReportParamList
     */
    public function setMidocoJasperReportParamValue(array $midocoJasperReportParamValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoJasperReportParamValueArrayErrorMessage = self::validateMidocoJasperReportParamValueForArrayConstraintsFromSetMidocoJasperReportParamValue($midocoJasperReportParamValue))) {
            throw new InvalidArgumentException($midocoJasperReportParamValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoJasperReportParamValue = $midocoJasperReportParamValue;
        
        return $this;
    }
    /**
     * Add item to MidocoJasperReportParamValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO $item
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoJasperReportParamList
     */
    public function addToMidocoJasperReportParamValue(\Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoJasperReportParamValue property can only contain items of type \Pggns\MidocoApi\Mis\StructType\JasperReportParamValueDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJasperReportParamValue[] = $item;
        
        return $this;
    }
}
