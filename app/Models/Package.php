<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const PACKAGE_TYPE_SELECT = [
        'Pro'   => 'Pro',
        'Basic' => 'Basic',
    ];

    public const STATUS_SELECT = [
        'enabled'  => 'Enabled',
        'disabled' => 'Disabled',
    ];

    public $table = 'packages';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'description',
        'price',
        'discount',
        'package_name',
        'package_type',
        'package_period',
        'package_period_unit',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function packagePackagePeriods()
    {
        return $this->hasMany(PackagePeriod::class, 'package_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
