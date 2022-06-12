<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupFareRequest extends Model
{
    use HasFactory;
    protected $connection = 'b2b_fd';
    protected $table = 'group_fares';
}
