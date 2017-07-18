<?php


namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use jeremykenedy\LaravelRoles\Contracts\RoleHasRelations as RoleHasRelationsContract;
use jeremykenedy\LaravelRoles\Traits\RoleHasRelations;
use jeremykenedy\LaravelRoles\Traits\Slugable;

class Role extends Model implements RoleHasRelationsContract
{
    use Slugable, RoleHasRelations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description', 'level'];

    /**
     * Create a new model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        if ($connection = config('roles.connection')) {
            $this->connection = $connection;
        }
    }

    public static $rules = [
        'name' => 'required|unique:roles,name',
        'slug' => 'required',
        'description' => 'required',
        'level' => 'required'
    ];

    public static $rules_update = [
        'name' => 'required',
        'slug' => 'required',
        'description' => 'required',
        'level' => 'required'
    ];

    public function users ()
    {
      return $this->belongsToMany(User::class);
    }
}
