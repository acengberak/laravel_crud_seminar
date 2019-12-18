<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'peserta_seminar';
    protected $primaryKey = 'id_seminar';
}
