<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    use HasFactory;
    protected $table = "tb_kelas";
    protected $primaryKey = "kelas_id";
    protected $guarded = [];

    public function mapel(): HasMany
    {
        return $this->hasMany(Mapel::class, 'kelas_id_mapel', 'mapel_id');
}
}
