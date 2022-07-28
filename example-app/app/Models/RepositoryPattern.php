<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;

class RepositoryPattern extends Model
{
    use HasFactory;
    protected $table = 'repository_patterns';
    protected $fillable = ['name', 'user_id' , 'description', 'code_quality_level', 'code_quality_score'];

    public function user(){
        return $this->belongsTo(User::class,'','user_id');
    }
}
