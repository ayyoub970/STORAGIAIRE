<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Spatie\Activitylog\Traits\LogsActivity;

class Tache extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'stage_id', 'tacheafaire','date_tache','progress'
        
    ];
    protected static $logAttributes = [ 'id', 'tacheafaire','date_tache','progress'];
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['tache', 'date_tache']);
        // Chain fluent methods for configuration options
    }
}
