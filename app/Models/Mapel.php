<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mapel extends Model
{
    use HasFactory;
    protected $table = "tb_mapel";
    protected $primaryKey = "mapel_id";
    protected $guarded = [];

    public function guru(): HasMany
    {
        return $this->hasMany(Guru::class, 'mapel_id_guru', 'guru_id');
}
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class, 'kelas_id_mapel', 'kelas_id');
    }

}