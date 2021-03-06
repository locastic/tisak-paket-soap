<?php

namespace Locastic\PaketTisakSoap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WSCreateShipmentOrdersResponse StructType
 * @subpackage Structs
 */
class WSCreateShipmentOrdersResponse extends AbstractStructBase
{
    /**
     * The ResponseStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ResponseStatus;
    /**
     * The ErrorCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $ErrorCode;
    /**
     * The ClientReferenceNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ClientReferenceNumber;
    /**
     * The ErrorMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for WSCreateShipmentOrdersResponse
     * @uses WSCreateShipmentOrdersResponse::setResponseStatus()
     * @uses WSCreateShipmentOrdersResponse::setErrorCode()
     * @uses WSCreateShipmentOrdersResponse::setClientReferenceNumber()
     * @uses WSCreateShipmentOrdersResponse::setErrorMessage()
     * @param string $responseStatus
     * @param int $errorCode
     * @param string $clientReferenceNumber
     * @param string $errorMessage
     */
    public function __construct($responseStatus = null, $errorCode = null, $clientReferenceNumber = null, $errorMessage = null)
    {
        $this
            ->setResponseStatus($responseStatus)
            ->setErrorCode($errorCode)
            ->setClientReferenceNumber($clientReferenceNumber)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get ResponseStatus value
     * @return string
     */
    public function getResponseStatus()
    {
        return $this->ResponseStatus;
    }
    /**
     * Set ResponseStatus value
     * @uses \Locastic\PaketTisakSoap\EnumType\EnumResponseStatus::valueIsValid()
     * @uses \Locastic\PaketTisakSoap\EnumType\EnumResponseStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $responseStatus
     * @return \Locastic\PaketTisakSoap\StructType\WSCreateShipmentOrdersResponse
     */
    public function setResponseStatus($responseStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Locastic\PaketTisakSoap\EnumType\EnumResponseStatus::valueIsValid($responseStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $responseStatus, implode(', ', \Locastic\PaketTisakSoap\EnumType\EnumResponseStatus::getValidValues())), __LINE__);
        }
        $this->ResponseStatus = $responseStatus;
        return $this;
    }
    /**
     * Get ErrorCode value
     * @return int
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @param int $errorCode
     * @return \Locastic\PaketTisakSoap\StructType\WSCreateShipmentOrdersResponse
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !is_numeric($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($errorCode)), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        return $this;
    }
    /**
     * Get ClientReferenceNumber value
     * @return string|null
     */
    public function getClientReferenceNumber()
    {
        return $this->ClientReferenceNumber;
    }
    /**
     * Set ClientReferenceNumber value
     * @param string $clientReferenceNumber
     * @return \Locastic\PaketTisakSoap\StructType\WSCreateShipmentOrdersResponse
     */
    public function setClientReferenceNumber($clientReferenceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($clientReferenceNumber) && !is_string($clientReferenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientReferenceNumber)), __LINE__);
        }
        $this->ClientReferenceNumber = $clientReferenceNumber;
        return $this;
    }
    /**
     * Get ErrorMessage value
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->ErrorMessage;
    }
    /**
     * Set ErrorMessage value
     * @param string $errorMessage
     * @return \Locastic\PaketTisakSoap\StructType\WSCreateShipmentOrdersResponse
     */
    public function setErrorMessage($errorMessage = null)
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorMessage)), __LINE__);
        }
        $this->ErrorMessage = $errorMessage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Locastic\PaketTisakSoap\StructType\WSCreateShipmentOrdersResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
