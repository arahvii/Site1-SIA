<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use DB;
use App\Services\User1Service;

Class User1Controller extends Controller {
    use ApiResponser;

    /**
     * consume the User1 Microservice
     * @var User1Service
     */
    public $user1Service;

    /**
     * Create a new controller instance
     * @return void
     */
    public function __construct(User1Service $user1Service){
        $this->user1Service = $user1Service;
    }
    /**
     * return the list of users
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successResponse($this->user1Service->obtainUsers1());
    }
    public function add(Request $request) {
        return $this->successResponse($this->user1Service->createUser1($request->all(), Response::HTTP_CREATED));
    }
}