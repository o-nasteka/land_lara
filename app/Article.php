<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    //
//    protected $table = 'article';

//    protected $primaryKey = 'id';
//    public $incrementing = FALSE;

//    public $timestamps = FALSE;

    protected $fillable = ['name', 'text'];
//    protected $guarded = ['alias'];

    protected $dates = ['deleted_at']; // for SoftDelete

    public function user(){
        return $this->belongsTo('App\User');
    }

}
