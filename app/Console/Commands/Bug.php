<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use function Laravel\Prompts\multiselect;

class Bug extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:bug';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command shows the bug';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Choose permissions
        $selectedPermissions = multiselect(
            'Select permissions',
            [
                'create',
                'read',
                'write',
                'delete',
            ],
            [
                'read',
                'write',
            ]
        );

        dump($selectedPermissions);
    }
}
