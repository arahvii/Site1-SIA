<?php

namespace App\Services;
use App\Traits\ConsumesExternalService;

class User1Service{
    
    use ConsumesExternalService;
    /**
     * The base uri to consume the User1 Service
     * @var string
     */
    public $baseUri;
    public function __construct()
    {
        $this ->baseUri = config('services.users1.base_uri');
    }
    /**
     * it obtains the full list of users from User1 Service
     * @return string
     */
    public function obtainUsers1()
    {
        return $this->performRequest('GET', '/users');
    }
    
}