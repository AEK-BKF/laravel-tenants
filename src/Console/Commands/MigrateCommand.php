<?php

declare(strict_types=1);

namespace Rinvex\Tenants\Console\Commands;

use Illuminate\Console\Command;

class MigrateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rinvex:migrate:tenants';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate Rinvex Tenants Tables.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        $this->warn($this->description);
        $this->call('migrate', ['--step' => true, '--path' => 'vendor/rinvex/tenants/database/migrations']);
    }
}
