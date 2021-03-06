<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/frauddetection_v1.proto

namespace NewestIndustry\FDS;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>frauddetection_v1.Timestamp</code>
 */
class Timestamp extends \Google\Protobuf\Internal\Message
{
    /**
     * Represents seconds of UTC time since Unix epoch
     * 1970-01-01T00:00:00Z. Must be from 0001-01-01T00:00:00Z to
     * 9999-12-31T23:59:59Z inclusive.
     *
     * Generated from protobuf field <code>int64 seconds = 1;</code>
     */
    private $seconds = 0;
    /**
     * Non-negative fractions of a second at nanosecond resolution. Negative
     * second values with fractions must still have non-negative nanos values
     * that count forward in time. Must be from 0 to 999,999,999
     * inclusive.
     *
     * Generated from protobuf field <code>int32 nanos = 2;</code>
     */
    private $nanos = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $seconds
     *           Represents seconds of UTC time since Unix epoch
     *           1970-01-01T00:00:00Z. Must be from 0001-01-01T00:00:00Z to
     *           9999-12-31T23:59:59Z inclusive.
     *     @type int $nanos
     *           Non-negative fractions of a second at nanosecond resolution. Negative
     *           second values with fractions must still have non-negative nanos values
     *           that count forward in time. Must be from 0 to 999,999,999
     *           inclusive.
     * }
     */
    public function __construct($data = NULL) {
        \NewestIndustry\GPBMetadata\FrauddetectionV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Represents seconds of UTC time since Unix epoch
     * 1970-01-01T00:00:00Z. Must be from 0001-01-01T00:00:00Z to
     * 9999-12-31T23:59:59Z inclusive.
     *
     * Generated from protobuf field <code>int64 seconds = 1;</code>
     * @return int|string
     */
    public function getSeconds()
    {
        return $this->seconds;
    }

    /**
     * Represents seconds of UTC time since Unix epoch
     * 1970-01-01T00:00:00Z. Must be from 0001-01-01T00:00:00Z to
     * 9999-12-31T23:59:59Z inclusive.
     *
     * Generated from protobuf field <code>int64 seconds = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSeconds($var)
    {
        GPBUtil::checkInt64($var);
        $this->seconds = $var;

        return $this;
    }

    /**
     * Non-negative fractions of a second at nanosecond resolution. Negative
     * second values with fractions must still have non-negative nanos values
     * that count forward in time. Must be from 0 to 999,999,999
     * inclusive.
     *
     * Generated from protobuf field <code>int32 nanos = 2;</code>
     * @return int
     */
    public function getNanos()
    {
        return $this->nanos;
    }

    /**
     * Non-negative fractions of a second at nanosecond resolution. Negative
     * second values with fractions must still have non-negative nanos values
     * that count forward in time. Must be from 0 to 999,999,999
     * inclusive.
     *
     * Generated from protobuf field <code>int32 nanos = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNanos($var)
    {
        GPBUtil::checkInt32($var);
        $this->nanos = $var;

        return $this;
    }

}

