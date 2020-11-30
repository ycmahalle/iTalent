<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
class Order extends Model
{

      use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="orders";
    protected $fillable = [
        'employee_name',
        'order_date',
        'order_time',
        'item',
        'quantity',
        'total_amount',

    ];


}
