<?php
namespace SuperAvalon\Payment;

class Payment
{

    protected $config = [];

    public function __construct()
    {
        $this->initConfig();
    }

    public function initConfig()
    {
        $configs = config('payment', []);
    }

    public function surpriseMe($name){
        echo $name, ", u're awesome."
    }
}