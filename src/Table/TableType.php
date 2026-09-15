<?php

namespace BMM\DotyposSdk\Table;

enum TableType: string
{
    case Square = 'SQUARE';
    case Square6 = 'SQUARE6';
    case Circle2 = 'CIRCLE2';
    case Circle4 = 'CIRCLE4';
    case Delivery = 'DELIVERY';
    case ChairSingle = 'CHAIR_SINGLE';
    case Round = 'ROUND';
    case Door = 'DOOR';
    case Generic = 'GENERIC';
    case Car1 = 'CAR1';
    case Car2 = 'CAR2';
}
