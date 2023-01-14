<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email,',
        'phone',
        'address_2',
        'address_1',
        'city',
        'province',
        'zip_code',
        'status',
        'message',
        'total_price',
        'tracking_number',
        'payment_mode',
        'payment_id',
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
