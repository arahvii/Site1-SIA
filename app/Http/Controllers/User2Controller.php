<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use DB;
use App\Services\User2Service;

Class User2Controller extends Controller {
    use ApiResponser;

    /**
     * consume the User1 Microservice
     * @var User2Service
     */
    public $user2Service;

    /**
     * Create a new controller instance
     * @return void
     */
    public function __construct(User2Service $user2Service){
        $this->user2Service = $user2Service;
    }
}