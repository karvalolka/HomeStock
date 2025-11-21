<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image_path',
        'type_item_id',
        'setting',
        'description',
        'season',
        'type',
        'price'
    ];

    public function typeItem(): BelongsTo
    {
        return $this->belongsTo(TypeItem::class);
    }
}
