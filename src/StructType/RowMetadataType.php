<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RowMetadataType StructType
 * @subpackage Structs
 */
class RowMetadataType extends AbstractStructBase
{
    /**
     * The MidocoCampaignField
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCampaignField
     * @var \Pggns\MidocoApi\Mis\StructType\CampaignFieldType[]
     */
    protected array $MidocoCampaignField = [];
    /**
     * The noOfColumns
     * @var int|null
     */
    protected ?int $noOfColumns = null;
    /**
     * Constructor method for RowMetadataType
     * @uses RowMetadataType::setMidocoCampaignField()
     * @uses RowMetadataType::setNoOfColumns()
     * @param \Pggns\MidocoApi\Mis\StructType\CampaignFieldType[] $midocoCampaignField
     * @param int $noOfColumns
     */
    public function __construct(array $midocoCampaignField = [], ?int $noOfColumns = null)
    {
        $this
            ->setMidocoCampaignField($midocoCampaignField)
            ->setNoOfColumns($noOfColumns);
    }
    /**
     * Get MidocoCampaignField value
     * @return \Pggns\MidocoApi\Mis\StructType\CampaignFieldType[]
     */
    public function getMidocoCampaignField(): array
    {
        return $this->MidocoCampaignField;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCampaignField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCampaignField method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCampaignFieldForArrayConstraintsFromSetMidocoCampaignField(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $rowMetadataTypeMidocoCampaignFieldItem) {
            // validation for constraint: itemType
            if (!$rowMetadataTypeMidocoCampaignFieldItem instanceof \Pggns\MidocoApi\Mis\StructType\CampaignFieldType) {
                $invalidValues[] = is_object($rowMetadataTypeMidocoCampaignFieldItem) ? get_class($rowMetadataTypeMidocoCampaignFieldItem) : sprintf('%s(%s)', gettype($rowMetadataTypeMidocoCampaignFieldItem), var_export($rowMetadataTypeMidocoCampaignFieldItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCampaignField property can only contain items of type \Pggns\MidocoApi\Mis\StructType\CampaignFieldType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCampaignField value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\CampaignFieldType[] $midocoCampaignField
     * @return \Pggns\MidocoApi\Mis\StructType\RowMetadataType
     */
    public function setMidocoCampaignField(array $midocoCampaignField = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCampaignFieldArrayErrorMessage = self::validateMidocoCampaignFieldForArrayConstraintsFromSetMidocoCampaignField($midocoCampaignField))) {
            throw new InvalidArgumentException($midocoCampaignFieldArrayErrorMessage, __LINE__);
        }
        $this->MidocoCampaignField = $midocoCampaignField;
        
        return $this;
    }
    /**
     * Add item to MidocoCampaignField value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\CampaignFieldType $item
     * @return \Pggns\MidocoApi\Mis\StructType\RowMetadataType
     */
    public function addToMidocoCampaignField(\Pggns\MidocoApi\Mis\StructType\CampaignFieldType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\CampaignFieldType) {
            throw new InvalidArgumentException(sprintf('The MidocoCampaignField property can only contain items of type \Pggns\MidocoApi\Mis\StructType\CampaignFieldType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCampaignField[] = $item;
        
        return $this;
    }
    /**
     * Get noOfColumns value
     * @return int|null
     */
    public function getNoOfColumns(): ?int
    {
        return $this->noOfColumns;
    }
    /**
     * Set noOfColumns value
     * @param int $noOfColumns
     * @return \Pggns\MidocoApi\Mis\StructType\RowMetadataType
     */
    public function setNoOfColumns(?int $noOfColumns = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfColumns) && !(is_int($noOfColumns) || ctype_digit($noOfColumns))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfColumns, true), gettype($noOfColumns)), __LINE__);
        }
        $this->noOfColumns = $noOfColumns;
        
        return $this;
    }
}
