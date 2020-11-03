<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $fillable = ['pseudo','content','article_id','valider'];

    protected $comment = [
        'valider' => 'boolean',
    ];

    public function article()
    {
       
        return $this->belongsTo(article::class);
    }


    
}
