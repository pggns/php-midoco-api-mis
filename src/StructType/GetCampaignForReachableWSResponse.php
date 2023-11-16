<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCampaignForReachableWSResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCampaignForReachableWS --- returns the results of a campaign as they are in campaign_assign (only customers that donn't have mailing_prohibited = true)
 * @subpackage Structs
 */
class GetCampaignForReachableWSResponse extends AbstractStructBase
{
    /**
     * The MidocoMisCampaignResultWS
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisCampaignResultWS
     * @var \Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType[]
     */
    protected array $MidocoMisCampaignResultWS = [];
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
     * Constructor method for GetCampaignForReachableWSResponse
     * @uses GetCampaignForReachableWSResponse::setMidocoMisCampaignResultWS()
     * @uses GetCampaignForReachableWSResponse::setMidocoMisCustomerResult()
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType[] $midocoMisCampaignResultWS
     * @param \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO[] $midocoMisCustomerResult
     */
    public function __construct(array $midocoMisCampaignResultWS = [], array $midocoMisCustomerResult = [])
    {
        $this
            ->setMidocoMisCampaignResultWS($midocoMisCampaignResultWS)
            ->setMidocoMisCustomerResult($midocoMisCustomerResult);
    }
    /**
     * Get MidocoMisCampaignResultWS value
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType[]
     */
    public function getMidocoMisCampaignResultWS(): array
    {
        return $this->MidocoMisCampaignResultWS;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMisCampaignResultWS method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisCampaignResultWS method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisCampaignResultWSForArrayConstraintsFromSetMidocoMisCampaignResultWS(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCampaignForReachableWSResponseMidocoMisCampaignResultWSItem) {
            // validation for constraint: itemType
            if (!$getCampaignForReachableWSResponseMidocoMisCampaignResultWSItem instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType) {
                $invalidValues[] = is_object($getCampaignForReachableWSResponseMidocoMisCampaignResultWSItem) ? get_class($getCampaignForReachableWSResponseMidocoMisCampaignResultWSItem) : sprintf('%s(%s)', gettype($getCampaignForReachableWSResponseMidocoMisCampaignResultWSItem), var_export($getCampaignForReachableWSResponseMidocoMisCampaignResultWSItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisCampaignResultWS property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisCampaignResultWS value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType[] $midocoMisCampaignResultWS
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignForReachableWSResponse
     */
    public function setMidocoMisCampaignResultWS(array $midocoMisCampaignResultWS = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisCampaignResultWSArrayErrorMessage = self::validateMidocoMisCampaignResultWSForArrayConstraintsFromSetMidocoMisCampaignResultWS($midocoMisCampaignResultWS))) {
            throw new InvalidArgumentException($midocoMisCampaignResultWSArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisCampaignResultWS = $midocoMisCampaignResultWS;
        
        return $this;
    }
    /**
     * Add item to MidocoMisCampaignResultWS value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignForReachableWSResponse
     */
    public function addToMidocoMisCampaignResultWS(\Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType) {
            throw new InvalidArgumentException(sprintf('The MidocoMisCampaignResultWS property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCampaignResultWSType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisCampaignResultWS[] = $item;
        
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
        foreach ($values as $getCampaignForReachableWSResponseMidocoMisCustomerResultItem) {
            // validation for constraint: itemType
            if (!$getCampaignForReachableWSResponseMidocoMisCustomerResultItem instanceof \Pggns\MidocoApi\Mis\StructType\MisCustomerResultDTO) {
                $invalidValues[] = is_object($getCampaignForReachableWSResponseMidocoMisCustomerResultItem) ? get_class($getCampaignForReachableWSResponseMidocoMisCustomerResultItem) : sprintf('%s(%s)', gettype($getCampaignForReachableWSResponseMidocoMisCustomerResultItem), var_export($getCampaignForReachableWSResponseMidocoMisCustomerResultItem, true));
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
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignForReachableWSResponse
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
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignForReachableWSResponse
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
