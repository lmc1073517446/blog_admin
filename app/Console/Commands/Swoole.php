<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Swoole extends Command
{
    public $ws;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'swoole {action?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'swoole';

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
        $action = $this->argument('action');
        switch ($action) {
            case 'close':

                break;

            default:
                $this->start();
                break;
        }

    }
    public function start(){
        $client = new swoole_server("127.0.0.1", 9501, SWOOLE_BASE, SWOOLE_SOCK_TCP);

        $client->on("connect", function(Client $cli) {
            $cli->send("GET / HTTP/1.1\r\n\r\n");
        });
        $client->on("receive", function(Client $cli, $data){
            echo "Receive: $data";
            $cli->send(str_repeat('A', 100)."\n");
            sleep(1);
        });
        $client->on("error", function(Client $cli){
            echo "error\n";
        });
        $client->on("close", function(Client $cli){
            echo "Connection close\n";
        });
        $client->start();

    }
}
