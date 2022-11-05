<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 20,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 21,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 22,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 23,
                'title' => 'car_model_create',
            ],
            [
                'id'    => 24,
                'title' => 'car_model_edit',
            ],
            [
                'id'    => 25,
                'title' => 'car_model_show',
            ],
            [
                'id'    => 26,
                'title' => 'car_model_delete',
            ],
            [
                'id'    => 27,
                'title' => 'car_model_access',
            ],
            [
                'id'    => 28,
                'title' => 'package_create',
            ],
            [
                'id'    => 29,
                'title' => 'package_edit',
            ],
            [
                'id'    => 30,
                'title' => 'package_show',
            ],
            [
                'id'    => 31,
                'title' => 'package_delete',
            ],
            [
                'id'    => 32,
                'title' => 'package_access',
            ],
            [
                'id'    => 33,
                'title' => 'package_period_create',
            ],
            [
                'id'    => 34,
                'title' => 'package_period_edit',
            ],
            [
                'id'    => 35,
                'title' => 'package_period_show',
            ],
            [
                'id'    => 36,
                'title' => 'package_period_delete',
            ],
            [
                'id'    => 37,
                'title' => 'package_period_access',
            ],
            [
                'id'    => 38,
                'title' => 'question_create',
            ],
            [
                'id'    => 39,
                'title' => 'question_edit',
            ],
            [
                'id'    => 40,
                'title' => 'question_show',
            ],
            [
                'id'    => 41,
                'title' => 'question_delete',
            ],
            [
                'id'    => 42,
                'title' => 'question_access',
            ],
            [
                'id'    => 43,
                'title' => 'answer_create',
            ],
            [
                'id'    => 44,
                'title' => 'answer_edit',
            ],
            [
                'id'    => 45,
                'title' => 'answer_show',
            ],
            [
                'id'    => 46,
                'title' => 'answer_delete',
            ],
            [
                'id'    => 47,
                'title' => 'answer_access',
            ],
            [
                'id'    => 48,
                'title' => 'sms_show',
            ],
            [
                'id'    => 49,
                'title' => 'sms_access',
            ],
            [
                'id'    => 50,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
