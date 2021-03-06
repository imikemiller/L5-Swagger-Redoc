<?php

namespace L5Swagger\Console;

use L5Swagger\Generator;
use Illuminate\Console\Command;

class GenerateDocsCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'l5-swagger:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Regenerate docs';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->info('Regenerating docs');
        Generator::generateDocs();
    }

    /**
     * Execute the console command in L5.5
     *
     * @return void
     */
    public function handle()
    {
        $this->fire();
    }
}
