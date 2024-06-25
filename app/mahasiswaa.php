<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswaa extends Model
{
   use HasFactory;
   protected $fillable = ['id','nim','nama','alamat','email','tempat_lahir','tgl_lahir','agama','status','foto']; //
   protected $table = 'mahasiswa';
   public $timestamps = false;
}
