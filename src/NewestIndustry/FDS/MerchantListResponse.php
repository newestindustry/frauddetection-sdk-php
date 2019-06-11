<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/frauddetection_v1.proto

namespace NewestIndustry\FDS;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>frauddetection_v1.MerchantListResponse</code>
 */
class MerchantListResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .frauddetection_v1.Merchant merchants = 1;</code>
     */
    private $merchants;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \NewestIndustry\FDS\Merchant[]|\Google\Protobuf\Internal\RepeatedField $merchants
     * }
     */
    public function __construct($data = NULL) {
        \NewestIndustry\GPBMetadata\FrauddetectionV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .frauddetection_v1.Merchant merchants = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMerchants()
    {
        return $this->merchants;
    }

    /**
     * Generated from protobuf field <code>repeated .frauddetection_v1.Merchant merchants = 1;</code>
     * @param \NewestIndustry\FDS\Merchant[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMerchants($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \NewestIndustry\FDS\Merchant::class);
        $this->merchants = $arr;

        return $this;
    }

}

