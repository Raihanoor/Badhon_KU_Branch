<?php

namespace App\Console\Commands;

use App\Models\Donor;
use Carbon\Carbon;
use DateTime;
use Illuminate\Console\Command;

class donorAvailibility extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:donorAvailibility';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will check everyday is the donor available or not';

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
     * @return int
     */
    public function handle()
    {
        $currentDate=Carbon::now()->format('d-m-Y');
        
        $donor = Donor::all();
        
        if($donor->next_available_date <= $currentDate)
        {
            $donor->next_available_date=null;
            $donor->is_available=false;
            $donor->save();
        }
        
    }
}
