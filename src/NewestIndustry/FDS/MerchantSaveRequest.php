<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/frauddetection_v1.proto

namespace NewestIndustry\FDS;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>frauddetection_v1.MerchantSaveRequest</code>
 */
class MerchantSaveRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.frauddetection_v1.Merchant merchant = 1;</code>
     */
    private $merchant = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \NewestIndustry\FDS\Merchant $merchant
     * }
     */
    public function __construct($data = NULL) {
        \NewestIndustry\GPBMetadata\FrauddetectionV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.frauddetection_v1.Merchant merchant = 1;</code>
     * @return \NewestIndustry\FDS\Merchant
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * Generated from protobuf field <code>.frauddetection_v1.Merchant merchant = 1;</code>
     * @param \NewestIndustry\FDS\Merchant $var
     * @return $this
     */
    public function setMerchant($var)
    {
        GPBUtil::checkMessage($var, \NewestIndustry\FDS\Merchant::class);
        $this->merchant = $var;

        return $this;
    }

}

