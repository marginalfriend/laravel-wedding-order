<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming conventions
    protected $table = 'Orders';

    // Specify the primary key if it's not 'id'
    protected $primaryKey = 'order_id';

    // Disable auto-incrementing primary key if it's not an integer
    public $incrementing = true;

    // Define the primary key type if it's not an integer
    protected $keyType = 'int';

    // Disable timestamps if not using created_at and updated_at columns
    public $timestamps = false;

    // Define fillable attributes for mass assignment
    protected $fillable = [
        'customer_id',
        'package_id',
        'order_date',
        'status',
    ];

    // Define the date columns for Eloquent date casting
    protected $dates = ['order_date'];

    // Define relationships
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }

    public function package()
    {
        return $this->belongsTo(WeddingPackage::class, 'package_id', 'package_id');
    }
}
