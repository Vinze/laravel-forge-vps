<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RemoveTodos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'todos:remove';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove the todos from the database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

    }
}
