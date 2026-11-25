<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminBootstrapSeeder extends Seeder
{
    public function run(): void
    {
        $email = strtolower(trim((string) env('ADMIN_BOOTSTRAP_EMAIL', '')));
        $password = (string) env('ADMIN_BOOTSTRAP_PASSWORD', '');
        $name = trim((string) env('ADMIN_BOOTSTRAP_NAME', 'Admin'));

        if ($email === '' || $password === '') {
            $this->command?->warn('Skipping admin bootstrap: set ADMIN_BOOTSTRAP_EMAIL and ADMIN_BOOTSTRAP_PASSWORD to seed admin credentials.');
            return;
        }

        User::updateOrCreate(
            ['email' => $email],
            [
                'name' => $name !== '' ? $name : 'Admin',
                'password' => $password,
                'email_verified_at' => now(),
            ]
        );

        $this->command?->info('Admin bootstrap user seeded/updated for: '.$email);
    }
}
