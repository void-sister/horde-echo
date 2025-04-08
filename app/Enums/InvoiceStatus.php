<?php

namespace App\Enums;

enum InvoiceStatus: string
{
    case Pending = 'pending';
    case Sent = 'sent';
    case Paid = 'paid';
    case Overdue = 'overdue';
    case Canceled = 'canceled';
    case Refunded = 'refunded';
    case PartiallyPaid = 'partially_paid';
    case Disputed = 'disputed';
}
