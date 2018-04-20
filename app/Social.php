<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{

	protected $fillable =['user_id', 'provider', 'provider_uid'];

	public $timestamps = false;

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
