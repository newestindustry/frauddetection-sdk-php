<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/frauddetection_v1.proto

namespace NewestIndustry\FDS;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Merchant represents the party that is making to sale to a client, coc stands for chamber of commerce and
 *the order prices represent the prices that are common for that merchant. 
 *
 * Generated from protobuf message <code>frauddetection_v1.Merchant</code>
 */
class Merchant extends \Google\Protobuf\Internal\Message
{
    /**
     * Merchant ID
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * Merchant name
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    private $name = '';
    /**
     * Chamber of Commerce ID (eg. in NLD this is the KVK Nummer)
     *
     * Generated from protobuf field <code>string coc_number = 3;</code>
     */
    private $coc_number = '';
    /**
     * Merchant address
     *
     * Generated from protobuf field <code>.frauddetection_v1.Address address = 4;</code>
     */
    private $address = null;
    /**
     * Merchant minimum order amount
     *
     * Generated from protobuf field <code>int64 order_amount_min = 5;</code>
     */
    private $order_amount_min = 0;
    /**
     * Merchant maximum order amount
     *
     * Generated from protobuf field <code>int64 order_amount_max = 6;</code>
     */
    private $order_amount_max = 0;
    /**
     * Merchant email address
     *
     * Generated from protobuf field <code>string email = 7;</code>
     */
    private $email = '';
    /**
     * Merchant phone number (using E.164)
     *
     * Generated from protobuf field <code>string phone = 8;</code>
     */
    private $phone = '';
    /**
     * Merchant URL (website)
     *
     * Generated from protobuf field <code>string url = 9;</code>
     */
    private $url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Merchant ID
     *     @type string $name
     *           Merchant name
     *     @type string $coc_number
     *           Chamber of Commerce ID (eg. in NLD this is the KVK Nummer)
     *     @type \NewestIndustry\FDS\Address $address
     *           Merchant address
     *     @type int|string $order_amount_min
     *           Merchant minimum order amount
     *     @type int|string $order_amount_max
     *           Merchant maximum order amount
     *     @type string $email
     *           Merchant email address
     *     @type string $phone
     *           Merchant phone number (using E.164)
     *     @type string $url
     *           Merchant URL (website)
     * }
     */
    public function __construct($data = NULL) {
        \NewestIndustry\GPBMetadata\FrauddetectionV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Merchant ID
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Merchant ID
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Merchant name
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Merchant name
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Chamber of Commerce ID (eg. in NLD this is the KVK Nummer)
     *
     * Generated from protobuf field <code>string coc_number = 3;</code>
     * @return string
     */
    public function getCocNumber()
    {
        return $this->coc_number;
    }

    /**
     * Chamber of Commerce ID (eg. in NLD this is the KVK Nummer)
     *
     * Generated from protobuf field <code>string coc_number = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCocNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->coc_number = $var;

        return $this;
    }

    /**
     * Merchant address
     *
     * Generated from protobuf field <code>.frauddetection_v1.Address address = 4;</code>
     * @return \NewestIndustry\FDS\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Merchant address
     *
     * Generated from protobuf field <code>.frauddetection_v1.Address address = 4;</code>
     * @param \NewestIndustry\FDS\Address $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkMessage($var, \NewestIndustry\FDS\Address::class);
        $this->address = $var;

        return $this;
    }

    /**
     * Merchant minimum order amount
     *
     * Generated from protobuf field <code>int64 order_amount_min = 5;</code>
     * @return int|string
     */
    public function getOrderAmountMin()
    {
        return $this->order_amount_min;
    }

    /**
     * Merchant minimum order amount
     *
     * Generated from protobuf field <code>int64 order_amount_min = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOrderAmountMin($var)
    {
        GPBUtil::checkInt64($var);
        $this->order_amount_min = $var;

        return $this;
    }

    /**
     * Merchant maximum order amount
     *
     * Generated from protobuf field <code>int64 order_amount_max = 6;</code>
     * @return int|string
     */
    public function getOrderAmountMax()
    {
        return $this->order_amount_max;
    }

    /**
     * Merchant maximum order amount
     *
     * Generated from protobuf field <code>int64 order_amount_max = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOrderAmountMax($var)
    {
        GPBUtil::checkInt64($var);
        $this->order_amount_max = $var;

        return $this;
    }

    /**
     * Merchant email address
     *
     * Generated from protobuf field <code>string email = 7;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Merchant email address
     *
     * Generated from protobuf field <code>string email = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Merchant phone number (using E.164)
     *
     * Generated from protobuf field <code>string phone = 8;</code>
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Merchant phone number (using E.164)
     *
     * Generated from protobuf field <code>string phone = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setPhone($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone = $var;

        return $this;
    }

    /**
     * Merchant URL (website)
     *
     * Generated from protobuf field <code>string url = 9;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Merchant URL (website)
     *
     * Generated from protobuf field <code>string url = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

}

