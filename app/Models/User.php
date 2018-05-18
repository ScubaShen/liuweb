<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;  //消息通知相关功能
use Illuminate\Foundation\Auth\User as Authenticatable;  //授权相关功能
use App\Notifications\ResetPassword;  //消息通知

class User extends Authenticatable  //用users表
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [  //过滤用户提交的字段
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

    public static function boot()
    {
        parent::boot();

        static::creating(function ($user){  //creating 用于监听模型被创建之前的事件
            $user->activation_token = str_random(30);
        });
    }

    public function gravatar($size = '100')
    {
        $hash = md5(strtolower(trim($this->attributes['email'])));  //attributes['email'] 就是獲取郵箱
        return "http://www.gravatar.com/avatar/$hash?s=$size";
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function statuses()
    {
        return $this->hasMany(Status::class);
    }
}
