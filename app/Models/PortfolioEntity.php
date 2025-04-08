<?php

namespace App\Models;

use Database\Factories\PortfolioEntityFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PortfolioEntity extends Model
{
    /** @use HasFactory<PortfolioEntityFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'artist',
        'title',
        'file_id',
        'position',
    ];

    public function file(): BelongsTo
    {
        return $this->belongsTo(File::class);
    }
}
