<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = ['no_stock','jenis','motif','panjang','tgl_masuk','status'];

}
