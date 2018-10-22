<?php
// GENERATED CODE -- DO NOT EDIT!

namespace NewestIndustry\FDS;

/**
 */
class FraudDetectionServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * CheckOrder runs the order through a series of validations and checks and returns a Fraud Probability Score between
     * 0 and 1, where 0 is least probable to be fraud and 1 is most probable to be fraud.
     * @param \NewestIndustry\FDS\CheckOrderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CheckOrder(\NewestIndustry\FDS\CheckOrderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/frauddetection_v1.FraudDetectionService/CheckOrder',
        $argument,
        ['\NewestIndustry\FDS\CheckOrderResponse', 'decode'],
        $metadata, $options);
    }

}
