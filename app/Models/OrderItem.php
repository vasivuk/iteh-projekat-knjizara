<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = [
        'order_id',
        'book_id',
        'serial',
        'quantity'
    ];

    public function order() {
        return $this->belongsTo(Order::class);
    }

    public function book() {
        return $this->belongsTo(Book::class);
    }
}
