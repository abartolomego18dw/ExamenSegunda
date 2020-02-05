<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Starwars;

class ApiController extends Controller
{
    public function index()
    {
        

        $client = new Client([
		    'base_uri' => 'https://swapi.co/api'
		]);

		$response = $client->request('GET','people/');
		$personajes= json_decode($response->getBody()->getContents());

		foreach ($personajes as $personaje){

			$persona = new Starwars();
			$persona->name = $personaje->name;
			$persona->height = $personaje->heigth;
			$persona->birth_year = $personaje->birth_year;
			$persona->save();
		}
		



		
}
}