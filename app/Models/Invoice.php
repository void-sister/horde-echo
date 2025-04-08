<?php

namespace App\Models;

use Database\Factories\InvoiceFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * App\Models\Invoice
 *
 * @property int $id
 * @property int|null $client_id
 * @property int|null $project_id
 * @property float $amount
 * @property string $status
 * @property string|null $due_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static InvoiceFactory factory(...$parameters)
 * @method static Builder|Invoice newModelQuery()
 * @method static Builder|Invoice newQuery()
 * @method static Builder|Invoice query()
 */
class Invoice extends Model
{
    /** @use HasFactory<InvoiceFactory> */
    use HasFactory;

    protected $fillable = [
        'client_id',
        'project_id',
        'amount',
        'status',
        'due_date',
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
