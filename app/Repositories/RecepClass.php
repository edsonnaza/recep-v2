<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
class RecepClass {
            
            protected $client;

            public function __construc(Client $client){
                    $this->client =  $client; //new Client(['base_uri'=>'http://localhost:9000/']);;
            }

            public function all(){
               
               // $response = $this->client->get('api/');
                  
               // return json_decode($response->getBody()->getContents());    
                return $this->get('api/');
            }

            public function get($url){
                   
                    $this->client=    new Client(['base_uri'=>'http://localhost:9000/']);;
                    $response = $this->client->request('GET', $url);
                    
               // $response = $this->client->response('GET',$url);                  
                return json_decode($response->getBody()->getContents());    
            }

            
}