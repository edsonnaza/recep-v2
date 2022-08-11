<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Carbon\Carbon;
class RecepClass {

            protected $client;

            public function __construc(Client $client){
                    $this->client =  $client; //new Client(['base_uri'=>'http://localhost:9000/']);;
            }

            public function all(){

               // $response = $this->client->get('api/');

               // return json_decode($response->getBody()->getContents());
                return $this->get('api/apirecep/');
            }

            public function get($url){

                    $this->client=    new Client(['base_uri'=>'http://192.168.20.218:8000/']);;
                    $response = $this->client->request('GET', $url);

               // $response = $this->client->response('GET',$url);
                return json_decode($response->getBody()->getContents());
            }


            public function waitTime($created_at){


                           $time= new Carbon($created_at);
                           $time=$time->diffInMinutes();

                           return $time;
            }


}
