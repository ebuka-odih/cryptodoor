<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['payment_confirm'];

    public function getPaymentConfirmAttribute()
    {
        return $this->confirm_payment;
    }

    public function status()
    {
        if ($this->confirm_payment > 1)
        {
            return "<span class='badge badge-success'>Paid</span>";
        }
        return "<span class='badge badge-danger'>Not Paid</span>";
    }

}
