<?php

namespace BMM\DotyposSdk\Webhook\DTO;

use BMM\DotyposSdk\HttpMethod;
use BMM\DotyposSdk\Webhook\WebhookPayloadEntity;

final class WebhookDTO
{
    public int $id;
    public int $_cloudId;
    public ?int $_warehouseId = null;
    public string $url;
    public HttpMethod $method;
    public WebhookPayloadEntity $payloadEntity;
    public string $payloadVersion;
    public string $versionDate;
}
