<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guru extends Model
{
    use HasFactory;
    protected $table = "tb_guru";
    protected $primaryKey = "guru_id";
    protected $guarded = [];

    public function mapel(): BelongsTo
    {
        return $this->belongsTo(Mapel::class, 'mapel_id_guru', 'guru_id');
    }
}