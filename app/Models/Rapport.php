<?php
  
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Spatie\Activitylog\Traits\LogsActivity;
class Rapport extends Model
{
    use HasFactory, LogsActivity;
    
  
    protected $fillable = ['stage_id', 'titre','EncadrantPed','EncadrantPro','Sommaire', ];
   
    protected static $logAttributes = [ 'id', 'stage_id','titre','	EncadrantPed','EncadrantPro'];
  
}
