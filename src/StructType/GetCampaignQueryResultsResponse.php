<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCampaignQueryResultsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCampaignQueryResults --- returns the query result set corresponding to a given campaign
 * @subpackage Structs
 */
class GetCampaignQueryResultsResponse extends AbstractStructBase
{
    /**
     * The MidocoMisCampaignResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisCampaignResult
     * @var \Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO[]
     */
    protected array $MidocoMisCampaignResult = [];
    /**
     * The MidocoMisCustomerResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisCustomerResult
     * @var \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO[]
     */
    protected array $MidocoMisCustomerResult = [];
    /**
     * Constructor method for GetCampaignQueryResultsResponse
     * @uses GetCampaignQueryResultsResponse::setMidocoMisCampaignResult()
     * @uses GetCampaignQueryResultsResponse::setMidocoMisCustomerResult()
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO[] $midocoMisCampaignResult
     * @param \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO[] $midocoMisCustomerResult
     */
    public function __construct(array $midocoMisCampaignResult = [], array $midocoMisCustomerResult = [])
    {
        $this
            ->setMidocoMisCampaignResult($midocoMisCampaignResult)
            ->setMidocoMisCustomerResult($midocoMisCustomerResult);
    }
    /**
     * Get MidocoMisCampaignResult value
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO[]
     */
    public function getMidocoMisCampaignResult(): array
    {
        return $this->MidocoMisCampaignResult;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMisCampaignResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisCampaignResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisCampaignResultForArrayConstraintsFromSetMidocoMisCampaignResult(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCampaignQueryResultsResponseMidocoMisCampaignResultItem) {
            // validation for constraint: itemType
            if (!$getCampaignQueryResultsResponseMidocoMisCampaignResultItem instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO) {
                $invalidValues[] = is_object($getCampaignQueryResultsResponseMidocoMisCampaignResultItem) ? get_class($getCampaignQueryResultsResponseMidocoMisCampaignResultItem) : sprintf('%s(%s)', gettype($getCampaignQueryResultsResponseMidocoMisCampaignResultItem), var_export($getCampaignQueryResultsResponseMidocoMisCampaignResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisCampaignResult property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisCampaignResult value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO[] $midocoMisCampaignResult
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignQueryResultsResponse
     */
    public function setMidocoMisCampaignResult(array $midocoMisCampaignResult = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisCampaignResultArrayErrorMessage = self::validateMidocoMisCampaignResultForArrayConstraintsFromSetMidocoMisCampaignResult($midocoMisCampaignResult))) {
            throw new InvalidArgumentException($midocoMisCampaignResultArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisCampaignResult = $midocoMisCampaignResult;
        
        return $this;
    }
    /**
     * Add item to MidocoMisCampaignResult value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignQueryResultsResponse
     */
    public function addToMidocoMisCampaignResult(\Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMisCampaignResult property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCampaignResultDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisCampaignResult[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMisCustomerResult value
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO[]
     */
    public function getMidocoMisCustomerResult(): array
    {
        return $this->MidocoMisCustomerResult;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMisCustomerResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisCustomerResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisCustomerResultForArrayConstraintsFromSetMidocoMisCustomerResult(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCampaignQueryResultsResponseMidocoMisCustomerResultItem) {
            // validation for constraint: itemType
            if (!$getCampaignQueryResultsResponseMidocoMisCustomerResultItem instanceof \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO) {
                $invalidValues[] = is_object($getCampaignQueryResultsResponseMidocoMisCustomerResultItem) ? get_class($getCampaignQueryResultsResponseMidocoMisCustomerResultItem) : sprintf('%s(%s)', gettype($getCampaignQueryResultsResponseMidocoMisCustomerResultItem), var_export($getCampaignQueryResultsResponseMidocoMisCustomerResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisCustomerResult property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisCustomerResult value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO[] $midocoMisCustomerResult
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignQueryResultsResponse
     */
    public function setMidocoMisCustomerResult(array $midocoMisCustomerResult = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisCustomerResultArrayErrorMessage = self::validateMidocoMisCustomerResultForArrayConstraintsFromSetMidocoMisCustomerResult($midocoMisCustomerResult))) {
            throw new InvalidArgumentException($midocoMisCustomerResultArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisCustomerResult = $midocoMisCustomerResult;
        
        return $this;
    }
    /**
     * Add item to MidocoMisCustomerResult value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignQueryResultsResponse
     */
    public function addToMidocoMisCustomerResult(\Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMisCustomerResult property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisCustomerResult[] = $item;
        
        return $this;
    }
}
