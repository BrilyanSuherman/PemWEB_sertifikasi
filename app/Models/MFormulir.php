<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MFormulir extends Model
{
    use HasFactory;
    protected $table = 'formulir';
    protected $fillable = ['id_users', 'nama', 'alamat_ktp', 'alamat_sekarang', 'provinsi', 'kabupaten', 'kecamatan', 'no_telp', 'no_hp', 'email', 'kewarganegaraan', 'wargaasing', 'tanggal_lahir', 'provinsi_lahir', 'kota_lahir', 'jenis_kelamin', 'status_menikah', 'agama', 'mtk', 'bindo', 'binggris', 'foto']; // Kolom yang bisa diisi

    public function user()
    {
        // return $this->belongsTo(MUser::class, 'id');
    }
}
