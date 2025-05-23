<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = ([
        'name',
        'position',
        'division',
        'city',
        'salary',
        'birthdate',
        'photo',
        'user_id',
    ]);

    public function user()
{
    return $this->belongsTo(User::class);
}
}
