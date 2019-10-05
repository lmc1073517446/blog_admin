<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Basic;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Libraries\MacAddr;

class Tourist extends BasicModel
{
    use SoftDeletes;
    public $table='tourist';

    public $timestamps = false;

    public function recordRourist(){
        die;
        $macAddr = new MacAddr();
        $mac_addr = $macAddr->GetMacAddr(PHP_OS);

        $info = $this->where('mac_addr','=',$mac_addr)->first();
        if(empty($info)){
            $data = [
                'mac_addr' => $mac_addr,
                'ip' => '/',
                'avatar' => '/img/vistor_'.rand(0,6).'.jpg',
                'add_time' => date('Y-m-d H:i:s'),
                'last_time'=> date('Y-m-d H:i:s'),
            ];
            $this::query()->insert($data);
        }else{
            $this::query()->where('mac_addr','=',$mac_addr)->update(['last_time'=>date('Y-m-d H:i:s')]);
        }

    }



}
