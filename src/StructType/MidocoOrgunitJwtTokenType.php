<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrgunitJwtTokenType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoOrgunitJwtTokenType extends OrgunitJwtTokenDTO
{
    /**
     * The TokenLink
     * @var string|null
     */
    protected ?string $TokenLink = null;
    /**
     * Constructor method for MidocoOrgunitJwtTokenType
     * @uses MidocoOrgunitJwtTokenType::setTokenLink()
     * @param string $tokenLink
     */
    public function __construct(?string $tokenLink = null)
    {
        $this
            ->setTokenLink($tokenLink);
    }
    /**
     * Get TokenLink value
     * @return string|null
     */
    public function getTokenLink(): ?string
    {
        return $this->TokenLink;
    }
    /**
     * Set TokenLink value
     * @param string $tokenLink
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoOrgunitJwtTokenType
     */
    public function setTokenLink(?string $tokenLink = null): self
    {
        // validation for constraint: string
        if (!is_null($tokenLink) && !is_string($tokenLink)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenLink, true), gettype($tokenLink)), __LINE__);
        }
        $this->TokenLink = $tokenLink;
        
        return $this;
    }
}
