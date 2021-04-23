<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class activitiesModel extends Model
{
    use HasFactory,Notifiable;

    protected $table = 'activities';
    protected $guarded = [];
}
