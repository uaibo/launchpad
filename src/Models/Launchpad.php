<?php

namespace Uaibo\Launchpad\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Launchpad extends Model
{
    use HasFactory;

    protected $table = 'launchpad';

    protected $fillable = [
        'email',
        'phone',
        'name',
        'ip',
        'source',
        'country'
    ];

}
