<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchTextTemplateResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: searchTextTemplate --- searches in crmsd db for a campaign text template
 * @subpackage Structs
 */
class SearchTextTemplateResponse extends AbstractStructBase
{
    /**
     * The MidocoTextTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTextTemplate
     * @var \Pggns\MidocoApi\Mis\StructType\CrmTemplateDTO[]
     */
    protected array $MidocoTextTemplate = [];
    /**
     * Constructor method for SearchTextTemplateResponse
     * @uses SearchTextTemplateResponse::setMidocoTextTemplate()
     * @param \Pggns\MidocoApi\Mis\StructType\CrmTemplateDTO[] $midocoTextTemplate
     */
    public function __construct(array $midocoTextTemplate = [])
    {
        $this
            ->setMidocoTextTemplate($midocoTextTemplate);
    }
    /**
     * Get MidocoTextTemplate value
     * @return \Pggns\MidocoApi\Mis\StructType\CrmTemplateDTO[]
     */
    public function getMidocoTextTemplate(): array
    {
        return $this->MidocoTextTemplate;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTextTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTextTemplate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTextTemplateForArrayConstraintsFromSetMidocoTextTemplate(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchTextTemplateResponseMidocoTextTemplateItem) {
            // validation for constraint: itemType
            if (!$searchTextTemplateResponseMidocoTextTemplateItem instanceof \Pggns\MidocoApi\Mis\StructType\CrmTemplateDTO) {
                $invalidValues[] = is_object($searchTextTemplateResponseMidocoTextTemplateItem) ? get_class($searchTextTemplateResponseMidocoTextTemplateItem) : sprintf('%s(%s)', gettype($searchTextTemplateResponseMidocoTextTemplateItem), var_export($searchTextTemplateResponseMidocoTextTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTextTemplate property can only contain items of type \Pggns\MidocoApi\Mis\StructType\CrmTemplateDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTextTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\CrmTemplateDTO[] $midocoTextTemplate
     * @return \Pggns\MidocoApi\Mis\StructType\SearchTextTemplateResponse
     */
    public function setMidocoTextTemplate(array $midocoTextTemplate = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTextTemplateArrayErrorMessage = self::validateMidocoTextTemplateForArrayConstraintsFromSetMidocoTextTemplate($midocoTextTemplate))) {
            throw new InvalidArgumentException($midocoTextTemplateArrayErrorMessage, __LINE__);
        }
        $this->MidocoTextTemplate = $midocoTextTemplate;
        
        return $this;
    }
    /**
     * Add item to MidocoTextTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\CrmTemplateDTO $item
     * @return \Pggns\MidocoApi\Mis\StructType\SearchTextTemplateResponse
     */
    public function addToMidocoTextTemplate(\Pggns\MidocoApi\Mis\StructType\CrmTemplateDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\CrmTemplateDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoTextTemplate property can only contain items of type \Pggns\MidocoApi\Mis\StructType\CrmTemplateDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTextTemplate[] = $item;
        
        return $this;
    }
}
