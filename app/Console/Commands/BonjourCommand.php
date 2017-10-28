<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class BonjourCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:bonjour';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Affiche un message de bienvenue';

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
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Bonjour, ceci est une commande artisan personnalisée !');
    }
}
