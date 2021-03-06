<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/frauddetection_v1.proto

namespace NewestIndustry\FDS;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>frauddetection_v1.Meta</code>
 */
class Meta extends \Google\Protobuf\Internal\Message
{
    /**
     * Trace id for audit trails. Autogenerated by this service. If a trace is given in the request it will be appended
     * to the one generated by this service for tracking in the implementation
     *
     * Generated from protobuf field <code>string trace_id = 1;</code>
     */
    private $trace_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $trace_id
     *           Trace id for audit trails. Autogenerated by this service. If a trace is given in the request it will be appended
     *           to the one generated by this service for tracking in the implementation
     * }
     */
    public function __construct($data = NULL) {
        \NewestIndustry\GPBMetadata\FrauddetectionV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Trace id for audit trails. Autogenerated by this service. If a trace is given in the request it will be appended
     * to the one generated by this service for tracking in the implementation
     *
     * Generated from protobuf field <code>string trace_id = 1;</code>
     * @return string
     */
    public function getTraceId()
    {
        return $this->trace_id;
    }

    /**
     * Trace id for audit trails. Autogenerated by this service. If a trace is given in the request it will be appended
     * to the one generated by this service for tracking in the implementation
     *
     * Generated from protobuf field <code>string trace_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTraceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->trace_id = $var;

        return $this;
    }

}

