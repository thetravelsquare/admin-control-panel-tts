<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FD extends Model
{
    use HasFactory;
    protected $connection = 'b2b_fd';
    protected $table = 'fixed_departures';
}
