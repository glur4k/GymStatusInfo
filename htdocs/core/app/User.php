<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable;
    use CanResetPassword;
    use EntrustUserTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'team',
        'slug',
        'email',
        'password'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * A user can book many timeslots
     *
     * @return HasMany
     */
    public function timeslots()
    {
        return $this->hasMany('App\Timeslot');
    }

    /**
     * @return Illuminate\Database\Eloquent\Model
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    /**
     * Detach all roles from a user
     * 
     * @return object
     */
    public function detachAllRoles()
    {
        DB::table('role_user')->where('user_id', $this->id)->delete();

        return $this;
    }
}
