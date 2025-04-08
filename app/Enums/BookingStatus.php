<?php

namespace App\Enums;

enum BookingStatus: string
{
    case Pending = 'pending';
    case Contacted = 'contacted';
    case Rejected = 'rejected';
    case Converted = 'converted';
}
