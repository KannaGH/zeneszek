<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zenesz extends Model
{
    public $table = 'zeneszek';
	public $primaryKey = 'e_id';
	public $timestamps = false;
	public $guarded = [];
}
