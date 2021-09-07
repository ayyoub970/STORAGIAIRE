<?php
  
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Spatie\Activitylog\Traits\LogsActivity;
class Stagepieces extends Model
{
    use HasFactory, LogsActivity;
    
  
    protected $fillable = [
        'stages_id', 'piecesjointes_id','chemin'
        
    ];
   
    protected static $logAttributes = [ 'id', 'stages_id','piecesjointes_id'];
  
}
