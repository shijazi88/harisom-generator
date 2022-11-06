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
                'title' => 'worker_create',
            ],
            [
                'id'    => 51,
                'title' => 'worker_edit',
            ],
            [
                'id'    => 52,
                'title' => 'worker_show',
            ],
            [
                'id'    => 53,
                'title' => 'worker_delete',
            ],
            [
                'id'    => 54,
                'title' => 'worker_access',
            ],
            [
                'id'    => 55,
                'title' => 'service_create',
            ],
            [
                'id'    => 56,
                'title' => 'service_edit',
            ],
            [
                'id'    => 57,
                'title' => 'service_show',
            ],
            [
                'id'    => 58,
                'title' => 'service_delete',
            ],
            [
                'id'    => 59,
                'title' => 'service_access',
            ],
            [
                'id'    => 60,
                'title' => 'coupon_create',
            ],
            [
                'id'    => 61,
                'title' => 'coupon_edit',
            ],
            [
                'id'    => 62,
                'title' => 'coupon_show',
            ],
            [
                'id'    => 63,
                'title' => 'coupon_delete',
            ],
            [
                'id'    => 64,
                'title' => 'coupon_access',
            ],
            [
                'id'    => 65,
                'title' => 'customer_create',
            ],
            [
                'id'    => 66,
                'title' => 'customer_edit',
            ],
            [
                'id'    => 67,
                'title' => 'customer_show',
            ],
            [
                'id'    => 68,
                'title' => 'customer_delete',
            ],
            [
                'id'    => 69,
                'title' => 'customer_access',
            ],
            [
                'id'    => 70,
                'title' => 'customer_wallet_create',
            ],
            [
                'id'    => 71,
                'title' => 'customer_wallet_edit',
            ],
            [
                'id'    => 72,
                'title' => 'customer_wallet_show',
            ],
            [
                'id'    => 73,
                'title' => 'customer_wallet_delete',
            ],
            [
                'id'    => 74,
                'title' => 'customer_wallet_access',
            ],
            [
                'id'    => 75,
                'title' => 'customer_address_create',
            ],
            [
                'id'    => 76,
                'title' => 'customer_address_edit',
            ],
            [
                'id'    => 77,
                'title' => 'customer_address_show',
            ],
            [
                'id'    => 78,
                'title' => 'customer_address_delete',
            ],
            [
                'id'    => 79,
                'title' => 'customer_address_access',
            ],
            [
                'id'    => 80,
                'title' => 'worker_address_create',
            ],
            [
                'id'    => 81,
                'title' => 'worker_address_edit',
            ],
            [
                'id'    => 82,
                'title' => 'worker_address_show',
            ],
            [
                'id'    => 83,
                'title' => 'worker_address_delete',
            ],
            [
                'id'    => 84,
                'title' => 'worker_address_access',
            ],
            [
                'id'    => 85,
                'title' => 'vehicle_create',
            ],
            [
                'id'    => 86,
                'title' => 'vehicle_edit',
            ],
            [
                'id'    => 87,
                'title' => 'vehicle_show',
            ],
            [
                'id'    => 88,
                'title' => 'vehicle_delete',
            ],
            [
                'id'    => 89,
                'title' => 'vehicle_access',
            ],
            [
                'id'    => 90,
                'title' => 'subscription_show',
            ],
            [
                'id'    => 91,
                'title' => 'subscription_access',
            ],
            [
                'id'    => 92,
                'title' => 'packages_management_access',
            ],
            [
                'id'    => 93,
                'title' => 'workers_management_access',
            ],
            [
                'id'    => 94,
                'title' => 'customer_management_access',
            ],
            [
                'id'    => 95,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
