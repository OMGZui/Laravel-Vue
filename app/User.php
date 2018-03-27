<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * 登录
     *
     * @param $input
     * @return bool
     */
    public function login($input)
    {
        $rs = $this->newQuery()->where('email', $input['email'])
            ->where('password', md5($input['password']))->first();
        return $rs ? true : false;
    }

    /**
     * 注册
     *
     * @param $input
     * @return $this|\Illuminate\Database\Eloquent\Model
     */
    public function register($input)
    {
        $input['password'] = md5($input['password']);
        $rs = $this->newQuery()->create($input);
        return $rs;
    }
}
