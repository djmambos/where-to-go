<?php

namespace App\Console\Commands;

use App\Http\Controllers\CliController;
use Illuminate\Console\Command;

class ParseCountries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'country:parse';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parse countries from external website';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Attention! Use 1 time!
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Start parse countries');
        CliController::parseCountries();
        return 0;
    }
}
