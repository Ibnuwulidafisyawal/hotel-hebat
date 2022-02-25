<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = 'tb_pemesanan';
    protected $fillable = ['nama_pemesan', 'email', 'no_hp','reservasi_id','tipe_kamar_id','jumlah_kamar'];
}
