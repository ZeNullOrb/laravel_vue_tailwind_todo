<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['project_id','title','status'];
    public function project(){
        return $this->belongsTo(project::class,'project_id','id');
    }
}
