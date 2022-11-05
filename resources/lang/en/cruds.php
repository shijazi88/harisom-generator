<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'userAlert' => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'alert_text'        => 'Alert Text',
            'alert_text_helper' => ' ',
            'alert_link'        => 'Alert Link',
            'alert_link_helper' => ' ',
            'user'              => 'Users',
            'user_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
        ],
    ],
    'carModel' => [
        'title'          => 'Car Models',
        'title_singular' => 'Car Model',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'model'             => 'model',
            'model_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'package' => [
        'title'          => 'Package',
        'title_singular' => 'Package',
        'fields'         => [
            'id'                         => 'ID',
            'id_helper'                  => ' ',
            'description'                => 'Description',
            'description_helper'         => ' ',
            'price'                      => 'Price',
            'price_helper'               => ' ',
            'discount'                   => 'Discount',
            'discount_helper'            => ' ',
            'package_name'               => 'Package Name',
            'package_name_helper'        => ' ',
            'package_type'               => 'Package Type',
            'package_type_helper'        => ' ',
            'package_period'             => 'Package Period',
            'package_period_helper'      => ' ',
            'package_period_unit'        => 'Package Period Unit',
            'package_period_unit_helper' => ' ',
            'status'                     => 'Status',
            'status_helper'              => ' ',
            'created_at'                 => 'Created at',
            'created_at_helper'          => ' ',
            'updated_at'                 => 'Updated at',
            'updated_at_helper'          => ' ',
            'deleted_at'                 => 'Deleted at',
            'deleted_at_helper'          => ' ',
        ],
    ],
    'packagePeriod' => [
        'title'          => 'Package Period',
        'title_singular' => 'Package Period',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'package'                => 'Package',
            'package_helper'         => ' ',
            'discount'               => 'Discount',
            'discount_helper'        => ' ',
            'period_value'           => 'Period Value',
            'period_value_helper'    => 'number of months',
            'period_label_en'        => 'Period Label En',
            'period_label_en_helper' => ' ',
            'period_label_ar'        => 'Period Label Arabic',
            'period_label_ar_helper' => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
        ],
    ],
    'question' => [
        'title'          => 'Question',
        'title_singular' => 'Question',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'package'            => 'Package',
            'package_helper'     => ' ',
            'question_en'        => 'Question En',
            'question_en_helper' => ' ',
            'question_ar'        => 'Question Ar',
            'question_ar_helper' => ' ',
            'price'              => 'Price',
            'price_helper'       => ' ',
            'status'             => 'Status',
            'status_helper'      => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'answer' => [
        'title'          => 'Answer',
        'title_singular' => 'Answer',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'question'          => 'Question',
            'question_helper'   => ' ',
            'answer_en'         => 'Answer English',
            'answer_en_helper'  => ' ',
            'answer_ar'         => 'Answer Arabic',
            'answer_ar_helper'  => ' ',
            'value'             => 'Value',
            'value_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'sms' => [
        'title'          => 'Sms',
        'title_singular' => 'Sms',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'mobile'            => 'Mobile',
            'mobile_helper'     => ' ',
            'otp'               => 'Otp',
            'otp_helper'        => ' ',
            'user_type'         => 'User Type',
            'user_type_helper'  => ' ',
            'status'            => 'Status',
            'status_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
];
