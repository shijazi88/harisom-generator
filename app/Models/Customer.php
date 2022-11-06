<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const GENDER_SELECT = [
        'male'   => 'male',
        'female' => 'female',
    ];

    public const STATUS_SELECT = [
        'enabled'  => 'enabled',
        'disabled' => 'disabled',
    ];

    public $table = 'customers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'mobile',
        'gender',
        'status',
        'email',
        'referral_code',
        'device_type',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function customerCustomerWallets()
    {
        return $this->hasMany(CustomerWallet::class, 'customer_id', 'id');
    }

    public function customerSubscriptions()
    {
        return $this->hasMany(Subscription::class, 'customer_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
