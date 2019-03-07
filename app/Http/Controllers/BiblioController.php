<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biblio;
use App\Bibliometadata;

class BiblioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return  response()->json(['Biblios'=> Biblio::with('metadata')->get()], 200); 
        
        $book = Bibliometadata::find(1);
        //Convert the XML string into an SimpleXMLElement object.
        $xmlObject = simplexml_load_string($book->metadata);
        //Encode the SimpleXMLElement object into a JSON string.
        $jsonString = json_encode($xmlObject);
        //Convert it back into an associative array for
        //the purposes of testing.
        $jsonArray = json_decode($jsonString, true);

        return  response()->json(['Biblios'=> $jsonArray], 200); 
    }

    public function mostrar(){

        
    } 
    public function search($namebook)
    {
        
        $book = Biblio::where('title','like', '%' . $namebook . '%')->get();
       // return  response()->json(['Biblios'=> $book->load(['metadatas','itemsbiblioteca'])], 200); 
        return  response()->json(['Biblios'=> $book->load(['itemsbiblioteca:biblionumber,biblioitemnumber,isbn,publishercode,illus,pages,place'])], 200); 

    }

    

   
}
