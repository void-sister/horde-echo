<?php

namespace App\Enums;

enum CalendarEntryType: string
{
    case Project = 'project';
    case Vacation = 'vacation';
    case Maintenance = 'maintenance';
    case Personal = 'personal';
}
