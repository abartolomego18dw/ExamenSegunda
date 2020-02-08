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
		    'base_uri' => 'https://swapi.co'
		]);

		$response = $client->request('GET','api/people');
		$personajes= json_decode($response->getBody()->getContents());
		$personaje = $personajes->results;


		

			

			foreach($personaje as $personaj){
			$persona = new Starwars();
			$persona->name = $personaj->name;
			$persona->height = $personaj->height;
			$persona->birth_year = $personaj->birth_year;
			$persona->homeworld = $personaj->homeworld;
			$persona->numfilms = $personaj->sizeof(films);
			$persona->save();
		}
			return redirect('/');
		
		



		
}
}