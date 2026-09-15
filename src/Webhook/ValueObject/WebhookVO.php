<?php

namespace BMM\DotyposSdk\Webhook\ValueObject;

use BMM\DotyposSdk\HttpMethod;
use BMM\DotyposSdk\Webhook\WebhookPayloadEntity;

final readonly class WebhookVO
{
    public function __construct(
        private HttpMethod $method,
        private string $url,
        private WebhookPayloadEntity $payloadEntity,
        private ?string $payloadVersion = 'V1',
        private ?int $_warehouseId = null,
    ) {
    }

    public function getMethod(): HttpMethod
    {
        return $this->method;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getPayloadEntity(): WebhookPayloadEntity
    {
        return $this->payloadEntity;
    }

    public function getPayloadVersion(): ?string
    {
        return $this->payloadVersion;
    }

    public function getWarehouseId(): ?int
    {
        return $this->_warehouseId;
    }
}
