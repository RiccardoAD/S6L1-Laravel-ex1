<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
   public function index(){
    //prenderemo dal db la lista dei libri 
    return view('books.index');
   }
   public function create(){
    return view('books.create');
   }
   public function show($id){
    return view('books.show',[
        'id' => $id
    ]);           //  secondo argomento, array associativo con chiave valore 
   }
   public function edit($id){
    return view('books.edit',compact('id'));  // altro modo di quello sopra 
   }
}
