<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;  //消息通知相关功能
use Illuminate\Foundation\Auth\User as Authenticatable;  //授权相关功能
use App\Notifications\ResetPassword;  //消息通知
use Auth;

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

        static::creating(function ($user) {  //creating 用于监听模型被创建之前的事件
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
        return $this->hasMany(Status::class);  //等於getall
    }

    public function feed()
    {
        //現在要返回關注用戶的微博數據(包含自己的)
        $user_ids = Auth::user()->followings->pluck('id')->toArray();
        array_push($user_ids, Auth::user()->id);  //自己
        return Status::whereIn('user_id', $user_ids)  //用Models/Status.php::select * from statuses where user_id in ($user_ids)
                            ->with('user')  //select * from users where id in($user_ids)，調用的時候是在StaticPagesController裡 Auth::user()->feed()->paginate(30); 會限制為30行
                            ->orderBy('created_at', 'desc');
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'followers', 'user_id', 'follower_id');
    }

    public function followings()
    {
        return $this->belongsToMany(User::class, 'followers', 'follower_id', 'user_id');
    }

    public function follow($user_ids)
    {
        if(!is_array($user_ids)){
            $user_ids = compact('user_ids');
        }
        $this->followings()->sync($user_ids, false);  //sync:解決重複id
    }

    public function unfollow($user_ids)
    {
        if (!is_array($user_ids)) {
            $user_ids = compact('user_ids');
        }
        $this->followings()->detach($user_ids);
    }

    public function isFollowing($user_id)
    {
        return $this->followings->contains($user_id);  //followings = followings()->get()  所有追隨者裡面是否包含這一id
    }
}
