<?php

declare(strict_types=1);

namespace BMM\DotyposSdk\Infrastructure\HttpClient\DTO;

final class ResponseDTO
{
    public string $data;
    public ?string $etag = null;
}
