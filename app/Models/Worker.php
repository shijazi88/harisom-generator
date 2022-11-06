<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Worker extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public const GENDER_SELECT = [
        'male'   => 'male',
        'female' => 'female',
    ];

    public const STATUS_SELECT = [
        'enabled'  => 'Enabled',
        'disabled' => 'Disabled',
    ];

    public $table = 'workers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'mobile',
        'status',
        'gender',
        'device_type',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
