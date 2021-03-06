<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/frauddetection_v1.proto

namespace NewestIndustry\FDS;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CheckError is the error struct used to return all errors thrown during calculation so this may contain
 * specific issues about backend connections
 *
 * Generated from protobuf message <code>frauddetection_v1.ValidationError</code>
 */
class ValidationError extends \Google\Protobuf\Internal\Message
{
    /**
     * Type holds the check type
     *
     * Generated from protobuf field <code>string field = 1;</code>
     */
    private $field = '';
    /**
     * Errors gives the errors encountered (in english)
     *
     * Generated from protobuf field <code>repeated .frauddetection_v1.Error errors = 2;</code>
     */
    private $errors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field
     *           Type holds the check type
     *     @type \NewestIndustry\FDS\Error[]|\Google\Protobuf\Internal\RepeatedField $errors
     *           Errors gives the errors encountered (in english)
     * }
     */
    public function __construct($data = NULL) {
        \NewestIndustry\GPBMetadata\FrauddetectionV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Type holds the check type
     *
     * Generated from protobuf field <code>string field = 1;</code>
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Type holds the check type
     *
     * Generated from protobuf field <code>string field = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkString($var, True);
        $this->field = $var;

        return $this;
    }

    /**
     * Errors gives the errors encountered (in english)
     *
     * Generated from protobuf field <code>repeated .frauddetection_v1.Error errors = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Errors gives the errors encountered (in english)
     *
     * Generated from protobuf field <code>repeated .frauddetection_v1.Error errors = 2;</code>
     * @param \NewestIndustry\FDS\Error[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \NewestIndustry\FDS\Error::class);
        $this->errors = $arr;

        return $this;
    }

}

