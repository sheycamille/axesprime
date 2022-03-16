<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'madmin-list',
            'madmin-create',
            'madmin-edit',
            'madmin-delete',
            'madmin-block',
            'mrole-list',
            'mrole-create',
            'mrole-edit',
            'mrole-delete',
            'mperms-list',
            'mperms-create',
            'mperms-edit',
            'mperms-delete',
            'musers-list',
            'musers-messageall',
            'musers-edit',
            'musers-delete',
            'musers-block',
            'musers-access-wallet',
            'musers-credit-debit',
            'musers-access-account',
            'mkyc-list',
            'mkyc-validate',
            'mdeposits-list',
            'mdeposits-process',
            'mwithdrawals-list',
            'mwithdrawals-process',
            'msettings-list',
            'msettings-update',
            'msettings-add',
            'msettings-edit',
            'msettings-delete'
        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission, 'guard_name' => 'admin']);
        }
    }
}
