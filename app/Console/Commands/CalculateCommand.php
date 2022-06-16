<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\ObjectController;
use App\Http\Controllers\Container;
use App\Http\Controllers\Calculation;

class CalculateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:calculate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'We want to calculate how many containers we need for one transport.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //start of container 1
        $container_1 = new Container(300, 200);
        $container_2 = new Container(100, 100);
        //end of container 1

        //start of Transport 1
        $circle_1 = new ObjectController(null, null, 50);
        $circle_2 = new ObjectController(null, null, 50);
        $square = new ObjectController(100, 100, null);
        $objects_calculation = new Calculation();
        $square_size = $objects_calculation->square($square->width, $square->length);
        $circle_size_1 = $objects_calculation->circle($circle_1->radius);
        $circle_size_2 = $objects_calculation->circle($circle_2->radius);
        $transport_size = $square_size + $circle_size_1 + $circle_size_2;
        $containers_big = floor($transport_size/$container_1->size);
        $containers_small = floor($transport_size/$container_2->size);
        echo "Transport 1:\r\n";
        echo "================\r\n";
        echo "Transport 1 Can have ".$containers_big." big containers.\r\n";
        echo "OR\r\n";
        echo "Transport 1 Can have ".$containers_small." small containers.\r\n";
        echo "\r\n\r\n\r\n";
        //end of transport 1

        //start of Transport 2
        $circle_1 = new ObjectController(null, null, 100);
        $square = new ObjectController(400, 400, null);
        $objects_calculation = new Calculation();
        $square_size = $objects_calculation->square($square->width, $square->length);
        $circle_size_1 = $objects_calculation->circle($circle_1->radius);
        $transport_size = $square_size + $circle_size_1;
        $containers_big = floor($transport_size/$container_1->size);
        $containers_small = floor($transport_size/$container_2->size);
        echo "Transport 2:\r\n";
        echo "================\r\n";
        echo "Transport 2 Can have ".$containers_big." big containers.\r\n";
        echo "OR\r\n";
        echo "Transport 2 Can have ".$containers_small." small containers.\r\n";
        echo "\r\n\r\n\r\n";
        //end of transport 2

        //start of Transport 3
        $circle_1 = new ObjectController(null, null, 50);
        $square_1 = new ObjectController(50, 50, null);
        $square_2 = new ObjectController(100, 100, null);
        $objects_calculation = new Calculation();
        $square_size_1 = $objects_calculation->square($square_1->width, $square_1->length);
        $square_size_2 = $objects_calculation->square($square_2->width, $square_2->length);
        $circle_size_1 = $objects_calculation->circle($circle_1->radius);
        $transport_size = $square_size_1 + $square_size_2 + $circle_size_1;
        $containers_big = floor($transport_size/$container_1->size);
        $containers_small = floor($transport_size/$container_2->size);
        echo "Transport 3:\r\n";
        echo "================\r\n";
        echo "Transport 3 Can have ".$containers_big." big containers.\r\n";
        echo "OR\r\n";
        echo "Transport 3 Can have ".$containers_small." small containers.\r\n";
        echo "\r\n\r\n\r\n";
        //end of transport 3

        
        return 0;
    }
}
