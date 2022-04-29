<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'service'        => [
        'title'          => 'Services',
        'title_singular' => 'Service',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'price'             => 'Price',
            'price_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'employee'       => [
        'title'          => 'Employees',
        'title_singular' => 'Employee',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'email'             => 'Email',
            'email_helper'      => '',
            'phone'             => 'Phone',
            'phone_helper'      => '',
            'photo'             => 'Photo',
            'photo_helper'      => '',
            'services'          => 'Services',
            'services_helper'   => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'client'         => [
        'title'          => 'Clients',
        'title_singular' => 'Client',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'phone'             => 'Phone',
            'phone_helper'      => '',
            'email'             => 'Email',
            'email_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'appointment'    => [
        'title'          => 'Appointments',
        'title_singular' => 'Appointment',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'client'             => 'Client',
            'client_helper'      => '',
            'employee'           => 'Employee',
            'employee_helper'    => '',
            'start_time'         => 'Start Time',
            'start_time_helper'  => '',
            'finish_time'        => 'Finish Time',
            'finish_time_helper' => '',
            'price'              => 'Price',
            'price_helper'       => '',
            'comments'           => 'Comments',
            'comments_helper'    => '',
            'services'           => 'Services',
            'services_helper'    => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
       
    ],
    'banners'        => [
        'title'          => 'Banner',
        'title_singular' => 'banner',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'description'             => 'Description',
            'description_helper'      => '',
            'photo'             => 'Photo',
            'photo_helper'      => '',
            'status'             => 'Status',
            'status_helper'      => '',
            'link'             => 'Link',
            'link_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'category'        => [
        'title'          => 'Category',
        'title_singular' => 'Category',
        'title_selection' => 'Select Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'status'             => 'Status',
            'status_helper'      => '',
            'type'             => 'Type',
            'type_helper'      => '',
            'order'             => 'Order',
            'order_helper'      => '',
            'menu'             => 'Menu',
            'menu_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'blog'        => [
        'title'          => 'Blog',
        'title_singular' => 'Blogs',
        'title_selection' => 'Select Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'summary'              => 'Summary',
            'summary_helper'       => '',
            'content'              => 'Content',
            'content_helper'       => '',
            'status'             => 'Status',
            'status_helper'      => '',
            'type'             => 'Type',
            'type_helper'      => '',
            'order'             => 'Order',
            'order_helper'      => '',
            'keyword'             => 'Keyword',
            'keyword_helper'      => '',
            'meta'             => 'Meta',
            'meta_helper'      => '',
            'pagetitle'             => 'Page Title',
            'pagetitle_helper'      => '',
            'ishome'             => 'Home',
            'ishome_helper'      => '',
            'photo'             => 'Photo',
            'photo_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'setting'        => [
        'title'          => 'Configuation',
        'title_system'          => 'System',
        'title_mail'          => 'Mail',
        'title_singular' => 'Setting Configuation', 
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'logo'              => 'Logo',
            'logo_helper'       => '',
            'map'              => 'Map',
            'map_helper'       => '',
            'video'              => 'Video',
            'video_helper'       => '',
            'email'              => 'Email',
            'email_helper'       => '',
            'phone'              => 'Phone',
            'phone_helper'       => '',
            'openhour'              => 'Open Hour',
            'openhour_helper'       => '',
            'facebook'              => 'Facebook',
            'facebook_helper'       => '',
            'twitter'              => 'Twitter',
            'twitter_helper'       => '',
            'linkedin'              => 'Linkedin',
            'linkedin_helper'       => '',
            'address'              => 'Address',
            'address_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'mail'        => [
        'title'          => 'Mail',
        'title_singular' => 'Mail Configuation',
        'fields'         => [
            'driver'            =>"Send Mail Send",
            'driver_helper'     =>'',
            'host'            =>"Admin Receive Mail",
            'host_helper'     =>'',
            'port'            =>"Mail Port",
            'port_helper'     =>'',
            'username'            =>"Mail Username",
            'username_helper'     =>'',
            'password'            =>"Mail Password",
            'password_helper'     =>'',
            'encryption'            =>"Mail Encryption",
            'encryption_helper'     =>'',
            'displayname'            =>"Send Mail Send",
            'displayname_helper'     =>'',
            'email'            =>"Email",
            'email_helper'     =>'',
            'vourcher'            =>"Vourcher",
            'vourcher_helper'     =>'',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'contact'        => [
        'title'          => 'Contact',
        'title_singular' => 'Contact',
        'fields'         => [
            'id'            =>"Id",
            'id_helper'     =>'',
            'name'            =>"Name",
            'name_helper'     =>'',
            'email'            =>"Email",
            'email_helper'     =>'',
            'phone'            =>"Phone",
            'phone_helper'     =>'',
            
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'order'        => [
        'title'          => 'Booking',
        'title_singular' => 'Booking',
        'fields'         => [
            'id'            =>"No",
            'id_helper'     =>'',
            'time'            =>"Time",
            'time_helper'     =>'',
            'name'            =>"Name",
            'name_helper'     =>'',
            'firstname'            =>"First Name",
            'firstname_helper'     =>'',
            'lastname'            =>"Last Name",
            'lastname_helper'     =>'',
            'dateOrder'            =>"Date",
            'date_helper'     =>'',
            'timeOrder'            =>"Time",
            'date_helper'     =>'',
            'email'            =>"Email",
            'email_helper'     =>'',
              'note'            =>"Note",
            'note_helper'     =>'',
            'phone'            =>"Phone",
            'phone_helper'     =>'',
            'service'            =>"Service",
            'service_helper'     =>'',
            'vourcher'            =>"Vourcher",
            'vourcher_helper'     =>'',
            'account'            =>"Account Number",
            'account_helper'     =>'',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'review'        => [
        'title'          => 'Review',
        'title_singular' => 'Review',
        'fields'         => [
            'id'            =>"No",
            'id_helper'     =>'',
            'name'            =>"Name",
            'name_helper'     =>'',
            'email'            =>"Email",
            'email_helper'     =>'',
            'content'            =>"Content",
            'content_helper'     =>'',
            'account'            =>"Account",
            'content_helper'     =>'',
            'status'            =>"Status",
            'status_helper'     =>'',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'subscribe'        => [
        'title'          => 'Subscribe',
        'title_singular' => 'Subscribe',
        'sendmail_singular'=>'SendMail',
        'fields'         => [
            'id'            =>"Id",
            'id_helper'     =>'',
            'email'            =>"Email",
            'email_helper'     =>'',
            'summary'            =>"Mail Content",
            'summary_helper'     =>'',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'member'        => [
        'title'          => 'Member',
        'title_singular' => 'Member',
        'fields'         => [
            'id'            =>"No",
            'id_helper'     =>'',
            'name'            =>"Name",
            'name_helper'     =>'',
            'firstname'            =>"First Name",
            'firstname_helper'     =>'',
            'lastname'            =>"Last Name",
            'lastname_helper'     =>'',
            'accountNumber'            =>"AccountNumber",
            'accountNumber_helper'     =>'',
            'phone'            =>"Phone",
            'phone_helper'     =>'',
            'email'            =>"Email",
            'email_helper'     =>'',
            'status'            =>"Status",
            'status_helper'     =>'',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'vourcher'        => [
        'title'          => 'Vourcher',
        'title_singular' => 'Vourcher',
        'fields'         => [
            'id'            =>"No",
            'id_helper'     =>'',
            'name'            =>"Code",
            'name_helper'     =>'',
            'discount'            =>"Discount",
            'discount_helper'     =>'',
            'expired'            =>"Expired Date",
            'expired_helper'     =>'',
            'status'            =>"Status",
            'status_helper'     =>'',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
];