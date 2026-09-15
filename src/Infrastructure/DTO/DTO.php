<?php

namespace BMM\DotyposSdk\Infrastructure\DTO;

class DTO
{
    public readonly ?string $eTag;

    public function setETag(?string $eTag): void
    {
        $this->eTag = $eTag;
    }
}
