<?php

declare(strict_types=1);

namespace BMM\DotyposSdk\Infrastructure\HttpClient\DTO;

final class HeaderDTO
{
    /** @var list<string>|null */
    public ?array $etag = null;
}
