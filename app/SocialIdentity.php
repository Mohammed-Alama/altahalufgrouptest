<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialIdentity extends Model
{
    protected $fillable = ['user_id','provider_name','provider_is'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
