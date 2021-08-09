<?php

namespace App\Http\Controllers;

use App\Models\Location;
use FarhanWazir\GoogleMaps\GMaps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class MapController extends Controller
{

   public function index(){
        $gmap = new GMaps();
        $config['center']= "15.76180681254195, -96.13613999790522"; 
        $config['zoom']= '12';
        $config['map_height']= '500px';
        $config['scroll']= false;
        $config['geocodeCaching'] = true;
        $gmap->initialize($config);
        

        //Marcadores
        //https://sites.google.com/site/gmapsdevelopment/
      /*   $marker['position']="16.859399770144982, -99.81117865572871";
        $marker['infowindow_content']="ITA";
        $marker['icon']="http://maps.google.com/mapfiles/kml/paddle/purple-stars.png";
        $gmap->add_marker($marker); */

        
        $locations = Location::where('status',2)->latest('id')->get();
        $contador = 0;


     
        foreach ($locations as $location){
            $windowBody = Str::limit($location->body, 250);
            $link=route('location.show', $location);
            $image = (Storage::url($location->image->url));
            $marker['position']=''.$location->latlocation.','.$location->lonlocation.'';
            $marker['infowindow_content'] = '<div><h1 style="color:Gray; font-weight: bold; text-align:center; padding:0.5rem; font-size:2.5rem;">'.$location->name.'</h1><div style="display:flex;"><img src="'.$image.'" width=300px style="border-radius:8px;" ><div style="text-align:center; margin:1rem;"><p style="text-align:center; padding:0.5rem; ">'.$windowBody.'<span style="font-style:italic;">Para seguir leyendo, presione el boton "Leer Más..."</span> </p><a href=" '.$link.' " style="display:block; border-radius:8px; text-align:center; padding:0.5rem; background-color: #543650; Margin:1rem; color: white;">Leer Más...</a></div></div></div>';
            $marker['icon']="http://maps.google.com/mapfiles/kml/paddle/purple-stars.png";
            $gmap->add_marker($marker);
        }
 
       




           

        

/* 
        $marker['position']="16.855074991923445, -99.81085061946254";
        $marker['infowindow_content']= $contentstring ;
        $marker['icon']="http://maps.google.com/mapfiles/kml/paddle/purple-stars.png";
        $gmap->add_marker($marker);

        $marker['position']="16.85245594124217, -99.803202741703";
        $marker['infowindow_content']="Barbacoa";
        $marker['icon']="http://maps.google.com/mapfiles/kml/paddle/purple-stars.png";
        $gmap->add_marker($marker); 

        $marker['position']="16.862251908798484, -99.80957255247537";
        $marker['infowindow_content']="Chedraui";
        $marker['icon']="http://maps.google.com/mapfiles/kml/paddle/purple-stars.png";
        $gmap->add_marker($marker);  */

        



        $map = $gmap->create_map();
        return view('map',compact('map','locations', 'contador'));
    }
}
