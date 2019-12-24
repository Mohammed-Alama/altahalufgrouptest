<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\SocialIdentity
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $provider_name
 * @property string $provider_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @property-read \App\User $user
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialIdentity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialIdentity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialIdentity query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialIdentity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialIdentity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialIdentity whereProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialIdentity whereProviderName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialIdentity whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SocialIdentity whereUserId($value)
 *
 * @mixin \Eloquent
 */
class SocialIdentity extends Model
{
    protected $fillable = ['user_id','provider_name','provider_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
