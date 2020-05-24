<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public static $imgs = array("https://eosoriof.s3.amazonaws.com/100531237_647478092767546_5383442099070828544_n.png",
    "https://eosoriof.s3.amazonaws.com/48358958_731215633902332_5530325896080130048_n.png",
    "https://eosoriof.s3.amazonaws.com/48359185_546542845820353_5522978237828825088_n.png",
    "https://eosoriof.s3.amazonaws.com/48415047_1066742100164216_6819520695739875328_n.png",
    "https://eosoriof.s3.amazonaws.com/49329791_1623048877841645_5900330589826842624_n.png",
    "https://eosoriof.s3.amazonaws.com/49796430_804283736588122_3530064802044968960_n.png",
    "https://eosoriof.s3.amazonaws.com/49813218_292088021493274_8620965863857586176_n.png",
    "https://eosoriof.s3.amazonaws.com/50100568_1222513907908740_3246706555189460992_n.jpg",
    "https://eosoriof.s3.amazonaws.com/50327307_1825721317557547_1150153930760519680_n.jpg",
    "https://eosoriof.s3.amazonaws.com/50437946_840527452957472_6079963722921541632_n.jpg",
    "https://eosoriof.s3.amazonaws.com/50512641_2403894369640087_5805802834997805056_n.jpg",
    "https://eosoriof.s3.amazonaws.com/50543020_731316570601238_5066201684145864704_n.jpg",
    "https://eosoriof.s3.amazonaws.com/50865229_288490055146868_6311347921988091904_n.jpg",
    "https://eosoriof.s3.amazonaws.com/50881553_242822099943686_2560178560027328512_n.jpg",
    "https://eosoriof.s3.amazonaws.com/99440811_631968780727681_542945782462939136_n.png"
    );

    public function index(){
        $totalimgs = (count(Controller::$imgs));
        $randomNumber = (rand(0,($totalimgs-1)));
        $randomImg = Controller::$imgs[$randomNumber];
        $data = [];
        $data["img"] = $randomImg;
        $data["ip"] = gethostbyname(gethostname());
        return view("imgs")->with("data",$data);
    }
}
