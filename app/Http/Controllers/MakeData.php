<?php

 

namespace App\Http\Controllers;

 

use Illuminate\Http\Request;
ini_set('memory_limit', '800M');
ini_set('max_execution_time',0);

 

class MakeData extends Controller
{
    
  protected function index()
    {  $jsonString = file_get_contents(base_path('public/data/airports.json'));
        $data = json_decode($jsonString,true);
        //Transform array to collection
        $collection=collect($data);
        // Get Cities
        $cities = $collection->pluck('city')->sort()->unique();
        $countries = $collection->pluck('country')->unique()->sort();
        // $countries = json_encode($countries);
        $states = $collection->pluck('state')->sort()->unique();
        $id=0;
  
   
  
        $array=[];
    //countries    
        foreach ($countries as $country) {
            $id++;
            $array[]=array('id'=>$id,'title' => $country);
            $states=$collection->where('country',$country)->pluck('state')->unique()->sort();
            unset($states_array);
            $id2=0;

 

//states
              foreach ($states as $state) {
                $id2++;
                $id3=0;
                $states_array[]=array('id' => $id , 'title'=>$state);
                 
                $cities=$collection->where('country',$country)->pluck('city')->unique()->sort();
                unset($city_array);

 


//cities
                foreach ($cities as $city) {
                $id3 ++ ;
                $city_array[]=array('id' => $id2 , 'title'=>$city);
              
                  $names=$collection->where('country',$country)->pluck('name')->unique()->sort();
                unset($name_array);
                   
                    foreach ($names as $name) {
                  $name_array[]=array('id' => $id3 , 'title'=>$name);
              
            
                  };

 

                 $city_array[$id3]['subs']=$name_array;
            
               };

 

 

                 

 

                 $states_array[$id2]['subs']=$city_array;
            
               };

 

              $array[$id]['subs']=$states_array;
        };

 

 




        return view('json', compact('array'));

 

 

}}

 

?>

 