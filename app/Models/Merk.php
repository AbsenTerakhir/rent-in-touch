<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    use HasFactory;

    protected $table = 'tb_merk';

    protected $primaryKey = 'id_merk';

    protected $fillable = [
        'id_tenant',
        'nama_merk',
        'keterangan',
    ];

    public function tenant()
{
     return $this->belongsTo(Tenant::class, 'id_tenant', 'id_tenant');
}

    }
