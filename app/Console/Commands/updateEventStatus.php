<?php

namespace App\Console\Commands;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Console\Command;

class updateEventStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-event-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'update event status';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Event::where('status', '!=', 'finished')
            ->where('date', '<', Carbon::now()->toDateString())
            ->orWhere(function ($query){
                $query->where('date', '=', Carbon::now()->toDateString())
                    ->where('time', '<', Carbon::now()->toTimeString());
            })
            ->update(['status' => 'finished']);

        Event::where('status', '!=', 'not available')
            ->where('available_seats', '=', 0)
            ->update(['status' => 'not available']);
        
        $this->info('Estados de eventos actualizados.');
    }
}
