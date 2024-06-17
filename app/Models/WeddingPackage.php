<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingPackage extends Model
{
    use HasFactory;

    // If the table name is not the plural form of the model name, define it explicitly
    protected $table = 'WeddingPackages';

    // Specify the primary key if it's not 'id'
    protected $primaryKey = 'package_id';

    // Disable auto-incrementing primary key if it's not an integer
    public $incrementing = true;

    // Define the primary key type if it's not an integer
    protected $keyType = 'int';

    // Disable timestamps if not using created_at and updated_at columns
    public $timestamps = false;

    // Define fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'description',
        'price'
    ];
}
