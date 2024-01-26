<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearAll extends Command
{
    protected $signature = 'clear:all';
    protected $description = 'Clear various caches and directories';

    public function handle()
    {
        // Run the existing Artisan commands
        $this->call('cache:clear');
        $this->call('config:clear');
        $this->call('debugbar:clear');
        $this->call('event:clear');
        $this->call('icons:clear');
        $this->call('optimize:clear');
        $this->call('queue:clear');
        $this->call('route:clear');
        $this->call('schedule:clear-cache');
        $this->call('storage:link');
        $this->call('telescope:clear');
        $this->call('view:clear');

        $this->info('All caches and directories cleared successfully.');
    }
}
