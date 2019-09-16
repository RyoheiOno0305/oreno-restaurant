<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use GuzzleHttp\Client;




class ResultsController extends Controller
{
    public function search(){
        return view('gnavi.search');
    }

    public function results(Request $request){


       $client = new Client();
       $geo_response = $client->request('GET',
       'https://maps.googleapis.com/maps/api/geocode/json',
       [
           'query'=>[
               'key'=>'AIzaSyC8JpJJYEFkmppRARm1ApDc72IIfVTS6Rg',
               'address'=>$request->place
               
           ]
       ]);

       $location = $geo_response->getBody()->getContents();
       $location_results = json_decode($location, true);
    

       
        $client = new Client();
        $response = $client->request('GET', 
        'https://api.gnavi.co.jp/RestSearchAPI/v3/',
        [
            'query'=>[
                'keyid'=>'caca5f46516bd4a45b6243cdf700fb48',
                'name'=>$request->name,
                'input_coordinates_mode'=>2,
                'latitude'=>$location_results["results"][0]["geometry"]["location"]["lat"],
                'longitude'=>$location_results["results"][0]["geometry"]["location"]["lng"],
                'range'=>3,
                'hit_per_page'=>50,
                'lunch'=>$request->lunch,
                'no_smoking'=>$request->no_smoking,
                'bottomless_cup'=>$request->bottomless_cup,
                'private_room'=>$request->private_room,
                'e_money'=>$request->e_money,
                'breakfast'=>$request->breakfast,
                'wifi'=>$request->wifi
            ]
        ]);

       
       

        $client = new Client();
        $response = $client->request('GET', 
        'https://api.gnavi.co.jp/RestSearchAPI/v3/',
        [
            'query'=>[
                'keyid'=>'caca5f46516bd4a45b6243cdf700fb48',
                'name'=>$request->name,
                'input_coordinates_mode'=>2,
                'latitude'=>$location_results["results"][0]["geometry"]["location"]["lat"],
                'longitude'=>$location_results["results"][0]["geometry"]["location"]["lng"],
                'range'=>3,
                'hit_per_page'=>50,
                'lunch'=>$request->lunch,
                'no_smoking'=>$request->no_smoking,
                'bottomless_cup'=>$request->bottomless_cup,
                'private_room'=>$request->private_room,
                'e_money'=>$request->e_money,
                'breakfast'=>$request->breakfast,
                'wifi'=>$request->wifi
            ]
        ]);
        
        

        
        $json = $response->getBody()->getContents();
        $results = json_decode($json, true);
        
        return view('gnavi.result')->with('results', $results);
        


        
        
    }

}
