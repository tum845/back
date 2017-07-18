<?php

namespace App;

use App\Models\Profile;
use App\Models\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;

class User extends Authenticatable
{
    //http://maps.googleapis.com/maps/api/distancematrix/json?origins=-6.9813432,110.39497690000007&destinations=-7.0453549,110.39485539999998&language=id-ID&sensor=false
    //sk VT-server-_dH5zo9aB9uVrnMmjhMT0By7
    //ck VT-client-AnCsokDPO1wg6CEz
    //mid M104380

    use Notifiable;
    use HasRoleAndPermission;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','regid','status_id','refferal','refference'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static $rules = [
        'name' => 'required',
        'email' => 'required',
    ];

    public function isActiveStatus()
    {
        return Auth::user()->status_id == 10;
    }

    public function profile ()
    {
        return $this->belongsTo(Profile::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function socialProviders()
    {
        return $this->hasMany('App\Models\SocialProvider');

    }
}
