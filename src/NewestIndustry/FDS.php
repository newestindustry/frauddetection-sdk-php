<?php

namespace NewestIndustry;

use Grpc\ChannelCredentials;
use NewestIndustry\FDS\CheckOrderRequest;
use NewestIndustry\FDS\CheckOrderResponse;
use NewestIndustry\FDS\Exception;
use NewestIndustry\FDS\FraudDetectionServiceClient;

/**
 * FDS Wrapper Class
 */
class FDS
{
    /** @var int Timeout in microseconds (1 s = 1 000 000 µs) */
    private $timeout = 10000000;

    /** @var FDS\FraudDetectionServiceClient $client */
    private $client;

    /**
     * FDS constructor.
     * @param $pem
     */
    public function __construct($pem, $hostname = 'fraud.smartplatforms.io', $port = 443)
    {
        $this->client = new FraudDetectionServiceClient(sprintf("%s:%s", $this->hostname, $this->port), [
            'credentials' => ChannelCredentials::createSsl($pem, $pem, $pem),
        ]);
    }

    /**
     * @return FraudDetectionServiceClient
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param CheckOrderRequest $argument
     * @param array $metadata
     * @param array $options
     * @return CheckOrderResponse
     * @throws Exception
     */
    public function CheckOrder(CheckOrderRequest $argument, $metadata = [], $options = [])
    {
        $options['timeout'] = $this->getTimeout();
        $co = $this->getClient()->CheckOrder($argument, $metadata, $options);

        /** @var CheckOrderResponse $orderResponse */
        list($orderResponse, $status) = $co->wait();
        if ($status->code > 0) {
            throw new Exception($status->details, $status->code);
        }

        return $orderResponse;
    }

    /**
     * @return int
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * @param int $timeout
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
    }
}