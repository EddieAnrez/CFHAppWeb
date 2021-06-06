<?php

namespace App\Http\Controllers;

use App\Models\Location;
use FarhanWazir\GoogleMaps\GMaps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class MapController extends Controller
{

   public function index(){
        $gmap = new GMaps();
        $config['center']= "16.859399770144982, -99.81117865572871"; 
        $config['zoom']= '14';
        $config['map_height']= '500px';
        $config['scroll']= false;
        $config['geocodeCaching'] = true;
        $gmap->initialize($config);
        

        //Marcadores
        //https://sites.google.com/site/gmapsdevelopment/
        $marker['position']="16.859399770144982, -99.81117865572871";
        $marker['infowindow_content']="ITA";
        $marker['icon']="http://maps.google.com/mapfiles/kml/paddle/purple-stars.png";
        $gmap->add_marker($marker);

        
        $locations = Location::where('status',1)->latest('id')->get();
        $contador = 0;


              
       /*  foreach ($locations as $location){
            $image = (Storage::url($location->image->url));
            $marker['position']=''.$location->latlocation.','.$location->lonlocation.'';
            $marker['infowindow_content'] = '<div ><h1 style="color:Gray; font-weight: bold; text-align:center; padding:0.5rem; font-size:2.5rem;">'.$location->name.'</h1><div style="display:flex;"><img src="'.$image.'" width=300px ><p style="text-align:center; padding:0.5rem; ">'.$location->body.' </p></div></div>';
            $marker['icon']="http://maps.google.com/mapfiles/kml/paddle/purple-stars.png";
            $arraymarker[$contador]=$marker;
            $contador = $contador+1;
        }

        for($i = 0; $i < count($arraymarker); $i++){
            
            $gmap->add_marker($arraymarker[$i]);
        } */

        foreach ($locations as $location){
            $image = (Storage::url($location->image->url));
            $marker['position']=''.$location->latlocation.','.$location->lonlocation.'';
            $marker['infowindow_content'] = '<div ><h1 style="color:Gray; font-weight: bold; text-align:center; padding:0.5rem; font-size:2.5rem;">'.$location->name.'</h1><div style="display:flex;"><img src="'.$image.'" width=300px ><p style="text-align:center; padding:0.5rem; ">'.$location->body.' </p></div></div>';
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
