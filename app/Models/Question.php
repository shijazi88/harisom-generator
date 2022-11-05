<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const STATUS_SELECT = [
        'enabled'  => 'Enabled',
        'disabled' => 'Disabled',
    ];

    public $table = 'questions';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'package_id',
        'question_en',
        'question_ar',
        'price',
        'status',
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
