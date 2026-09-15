<?php

declare(strict_types=1);

namespace BMM\DotyposSdk\Infrastructure\HttpClient\DTO;

final class ViolationsExceptionDTO
{
    /** @var ViolationDTO[] */
    public array $violations;
}
