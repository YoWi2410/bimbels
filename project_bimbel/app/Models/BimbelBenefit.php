<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BimbelBenefit extends Model
{
    use HasFactory;

    protected $fillable = ['bimbel_id', 'name'];
}
