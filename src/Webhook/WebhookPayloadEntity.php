<?php

declare(strict_types=1);

namespace BMM\DotyposSdk\Webhook;

enum WebhookPayloadEntity: string
{
    case StockLog = 'STOCKLOG';
    case PointsLog = 'POINTSLOG';
    case Product = 'PRODUCT';
    case OrderBean = 'ORDERBEAN';
    case Reservation = 'RESERVATION';
    case Customer = 'CUSTOMER';
}
