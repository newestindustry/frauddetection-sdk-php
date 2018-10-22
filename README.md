# Fraud Detection Service SDK for PHP

## About

This is the PHP SDK package for using the Newest Industry Fraud Detection Service. 
It is a gRPC service using protocol buffers as a serializer. To connect you need a TLS certificate
issued by Newest Industry.

## Usage

This package can be installed using composer.

`composer require newestindustry/frauddetection`

To implement a basic order check implement like this and expand the order data.

```php
$fds = new \NewestIndustry\FDS($certificate);

$cor = new \NewestIndustry\FDS\CheckOrderRequest();
$cor->setOrder(new \NewestIndustry\FDS\Order());

try {
    $co = $fds->CheckOrder($cor);
    echo $co->getScore();
} catch (\NewestIndustry\FDS\Exception $e) {
    echo "Something went wrong. " . $e->getMessage();
}

```

## Requirements

To use the service you need php installed with the [ext-grpc](https://pecl.php.net/package/gRPC) package. 
More information about grpc on PHP can be found [here](https://grpc.io/docs/quickstart/php.html). 

## Links

- More about [grpc](https://grpc.io/)
- More about [protobuf](https://developers.google.com/protocol-buffers/)