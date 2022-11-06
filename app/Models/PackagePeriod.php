<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackagePeriod extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'package_periods';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'package_id',
        'discount',
        'period_value',
        'period_label_en',
        'period_label_ar',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
