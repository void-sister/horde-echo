<?php

namespace App\Models;

use App\Enums\ProjectStatus;
use Database\Factories\ProjectFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\Project
 *
 * @property int $id
 * @property int|null $client_id
 * @property int|null $booking_id
 * @property string $title
 * @property string|null $description
 * @property string|null $notes
 * @property string $start_date
 * @property string $end_date
 * @property string $release_date
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Booking|null $booking
 * @property-read Client|null $client
 * @method static Builder|Project newModelQuery()
 *
 */
class Project extends Model
{
    /** @use HasFactory<ProjectFactory> */
    use HasFactory;

    protected $fillable = [
        'client_id',
        'booking_id',
        'title',
        'description',
        'notes',
        'start_date',
        'end_date',
        'release_date',
        'status',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'release_date' => 'date',
        'status' => ProjectStatus::class,
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }
}
