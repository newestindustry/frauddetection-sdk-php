<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: frauddetection_v1.proto

namespace NewestIndustry\FDS;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>frauddetection_v1.OrderLine</code>
 */
class OrderLine extends \Google\Protobuf\Internal\Message
{
    /**
     * Product definition
     *
     * Generated from protobuf field <code>.frauddetection_v1.Product product = 1;</code>
     */
    private $product = null;
    /**
     * Amount of Product ordered
     *
     * Generated from protobuf field <code>int32 amount = 2;</code>
     */
    private $amount = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \NewestIndustry\FDS\Product $product
     *           Product definition
     *     @type int $amount
     *           Amount of Product ordered
     * }
     */
    public function __construct($data = NULL) {
        \NewestIndustry\GPBMetadata\FrauddetectionV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Product definition
     *
     * Generated from protobuf field <code>.frauddetection_v1.Product product = 1;</code>
     * @return \NewestIndustry\FDS\Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Product definition
     *
     * Generated from protobuf field <code>.frauddetection_v1.Product product = 1;</code>
     * @param \NewestIndustry\FDS\Product $var
     * @return $this
     */
    public function setProduct($var)
    {
        GPBUtil::checkMessage($var, \NewestIndustry\FDS\Product::class);
        $this->product = $var;

        return $this;
    }

    /**
     * Amount of Product ordered
     *
     * Generated from protobuf field <code>int32 amount = 2;</code>
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Amount of Product ordered
     *
     * Generated from protobuf field <code>int32 amount = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt32($var);
        $this->amount = $var;

        return $this;
    }

}
