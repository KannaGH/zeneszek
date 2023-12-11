<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zeneszam extends Model
{
    public $table = 'zeneszamok';
	public $primaryKey = 'zsz_id';
	public $timestamps = false;
	public $guarded = [];
}
