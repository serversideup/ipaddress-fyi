<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Utilities\IPSource;

class UpdateIPAddresses extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:ipaddresses {app}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates all of the ip addresses for the sources.';

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
    public function handle( )
    {
        /*
            Extracts the app variable from the command
        */
        $app = $this->argument('app');

        /*
            If the app is all, all sources are updated otherwise we update
            an individual source.
        */
        if( $app == 'all' ){
            IPSource::updateAllSources();
        }else{
            IPSource::updateSource( $app );
        }
    }
}
