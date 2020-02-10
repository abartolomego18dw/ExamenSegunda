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
		    'base_uri' => 'https://swapi.co/api/'
		]);

		$response = $client->request('GET','people');
		$personajes= json_decode($response->getBody()->getContents());
		$personaje = $personajes->results;


		

			

			foreach($personaje as $personaj){
			$persona = new Starwars();
			$persona->name = $personaj->name;
			$persona->height = $personaj->height;
			$persona->birth_year = $personaj->birth_year;
			$persona->numfilms = count($personaj->films);
			$filtrar = substr($personaj->homeworld, 21);
			$response2 = $client->request('GET',$filtrar);
			$homeworld= json_decode($response2->getBody()->getContents());
			$persona->homeworld = $homeworld->name;
			$persona->save();
			
		}
			return redirect('/');
		
		



		
}
}