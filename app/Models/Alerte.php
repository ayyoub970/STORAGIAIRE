<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Alerte extends Model
{
    use HasFactory, LogsActivity;
    protected $fillable = [
        
        'stage_id',
        'date_creation',
        'contenu',
        'status',  
    ];

    protected static $logAttributes = [ 'id', 'stage_id','contenu','date_creation','status'];
    public function stage()
    {
        return $this->belongsTo(Stage::class);
    }
    
}