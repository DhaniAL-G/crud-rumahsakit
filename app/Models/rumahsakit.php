<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rumahsakit extends Model
{
    use HasFactory;
    protected $table = 'rumahsakit';
    protected $primaryKey = 'idpasien';
    protected $fillable = ['idpasien','nama_pasien','jenis_kelamin','jenis_penyakit','lama_inap'];
}