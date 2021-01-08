<?php

namespace App\Models;
use App\Notifications\UserCreate;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Password;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    const ROLE_ADMIN = 1;
    const ROLE_BOOSTER = 2;
    const ROLE_USER =3;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'rank'
    ];
    public static function createFully($data){
        $password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $data['password'] = $password;
        $user = parent::create($data);
        self::assingRole($user,$data['type']);
        $user->save();
        $token = Password::broker()->createToken($user);
        $user->notify(new UserCreate($token));
        return $user;

    }

    public static function createUser($data){
        $user = parent::create($data);
        self::assingRole($user,$data['type']);
        $user->save();
        $token = Password::broker()->createToken($user);
        $user->notify(new UserCreate($token));
        return $user;

    }

    public static function assingRole(User $user, $type){
        $types = [
            self::ROLE_ADMIN => Admin::class,
            self::ROLE_BOOSTER => Booster::class,
            self::ROLE_USER => UserLOL::class,
        ];
        $model = $types[$type];
        $model = $model::create([]);
        $user->userble()->associate($model);
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function userble(){
        return $this->morphTo();
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
