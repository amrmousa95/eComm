<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $fillable = ['product_id','user_id','status','payment_method','payment_status','address'];
    public $timestamps = false;
}
