<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: frauddetection_v1.proto

namespace NewestIndustry\FDS;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>frauddetection_v1.Address</code>
 */
class Address extends \Google\Protobuf\Internal\Message
{
    /**
     * Post/zipcode (eg. in NLD format is p6: 1234AB)
     *
     * Generated from protobuf field <code>string postcode = 1;</code>
     */
    private $postcode = '';
    /**
     * Dutch number splitting is used, so number is the first part and numeric (no leading zeroes possible)
     *
     * Generated from protobuf field <code>int32 number = 2;</code>
     */
    private $number = 0;
    /**
     * Number addition is a string concatenation to number, case sensitive
     *
     * Generated from protobuf field <code>string number_addition = 3;</code>
     */
    private $number_addition = '';
    /**
     * Number addition is a string concatenation to number after number_addition, case sensitive, usually joined with -
     *
     * Generated from protobuf field <code>string number_letter = 4;</code>
     */
    private $number_letter = '';
    /**
     * Streeet name
     *
     * Generated from protobuf field <code>string street = 5;</code>
     */
    private $street = '';
    /**
     * City name
     *
     * Generated from protobuf field <code>string city = 6;</code>
     */
    private $city = '';
    /**
     * Country code (ISO 3166-1 alpha-3, eg. NLD)
     *
     * Generated from protobuf field <code>string country = 7;</code>
     */
    private $country = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $postcode
     *           Post/zipcode (eg. in NLD format is p6: 1234AB)
     *     @type int $number
     *           Dutch number splitting is used, so number is the first part and numeric (no leading zeroes possible)
     *     @type string $number_addition
     *           Number addition is a string concatenation to number, case sensitive
     *     @type string $number_letter
     *           Number addition is a string concatenation to number after number_addition, case sensitive, usually joined with -
     *     @type string $street
     *           Streeet name
     *     @type string $city
     *           City name
     *     @type string $country
     *           Country code (ISO 3166-1 alpha-3, eg. NLD)
     * }
     */
    public function __construct($data = NULL) {
        \NewestIndustry\GPBMetadata\FrauddetectionV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Post/zipcode (eg. in NLD format is p6: 1234AB)
     *
     * Generated from protobuf field <code>string postcode = 1;</code>
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Post/zipcode (eg. in NLD format is p6: 1234AB)
     *
     * Generated from protobuf field <code>string postcode = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPostcode($var)
    {
        GPBUtil::checkString($var, True);
        $this->postcode = $var;

        return $this;
    }

    /**
     * Dutch number splitting is used, so number is the first part and numeric (no leading zeroes possible)
     *
     * Generated from protobuf field <code>int32 number = 2;</code>
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Dutch number splitting is used, so number is the first part and numeric (no leading zeroes possible)
     *
     * Generated from protobuf field <code>int32 number = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNumber($var)
    {
        GPBUtil::checkInt32($var);
        $this->number = $var;

        return $this;
    }

    /**
     * Number addition is a string concatenation to number, case sensitive
     *
     * Generated from protobuf field <code>string number_addition = 3;</code>
     * @return string
     */
    public function getNumberAddition()
    {
        return $this->number_addition;
    }

    /**
     * Number addition is a string concatenation to number, case sensitive
     *
     * Generated from protobuf field <code>string number_addition = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNumberAddition($var)
    {
        GPBUtil::checkString($var, True);
        $this->number_addition = $var;

        return $this;
    }

    /**
     * Number addition is a string concatenation to number after number_addition, case sensitive, usually joined with -
     *
     * Generated from protobuf field <code>string number_letter = 4;</code>
     * @return string
     */
    public function getNumberLetter()
    {
        return $this->number_letter;
    }

    /**
     * Number addition is a string concatenation to number after number_addition, case sensitive, usually joined with -
     *
     * Generated from protobuf field <code>string number_letter = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNumberLetter($var)
    {
        GPBUtil::checkString($var, True);
        $this->number_letter = $var;

        return $this;
    }

    /**
     * Streeet name
     *
     * Generated from protobuf field <code>string street = 5;</code>
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Streeet name
     *
     * Generated from protobuf field <code>string street = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setStreet($var)
    {
        GPBUtil::checkString($var, True);
        $this->street = $var;

        return $this;
    }

    /**
     * City name
     *
     * Generated from protobuf field <code>string city = 6;</code>
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * City name
     *
     * Generated from protobuf field <code>string city = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->city = $var;

        return $this;
    }

    /**
     * Country code (ISO 3166-1 alpha-3, eg. NLD)
     *
     * Generated from protobuf field <code>string country = 7;</code>
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Country code (ISO 3166-1 alpha-3, eg. NLD)
     *
     * Generated from protobuf field <code>string country = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->country = $var;

        return $this;
    }

}
