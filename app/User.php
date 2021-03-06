<?php

namespace Garble;

use Garble\Traits\HasRole;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Garble\User.
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\Garble\Role[] $roles
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string|null $username
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Garble\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Garble\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Garble\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Garble\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Garble\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Garble\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Garble\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Garble\User whereUsername($value)
 */
class User extends Authenticatable
{
    use Notifiable, HasRole;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
