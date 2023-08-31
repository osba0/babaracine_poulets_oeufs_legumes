<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";

    public function user(){
        return $this->belongsTo(User::Class);
    }

    public function orderItems(){
        return $this->hasMany(orderItem::Class);
    }

    public function shipping(){
        return $this->hasOne(Shipping::Class);
    }

    public function transaction(){
        return $this->hasOne(Transaction::Class);
    }
}
