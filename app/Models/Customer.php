<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming conventions
    protected $table = 'Customers';

    // Specify the primary key if it's not 'id'
    protected $primaryKey = 'customer_id';

    // Disable auto-incrementing primary key if it's not an integer
    public $incrementing = true;

    // Define the primary key type if it's not an integer
    protected $keyType = 'int';

    // Disable timestamps if not using created_at and updated_at columns
    public $timestamps = false;

    // Define fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'email',
        'phone'
    ];
}
