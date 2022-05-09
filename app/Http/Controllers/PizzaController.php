<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{

  public function index() {
    // get data from a database
    // $pizzas = Pizza::all();
    // $pizzas = Pizza::orderBy('name', 'desc')->get();
    // $pizzas = Pizza::where('type', 'hawaiian')->get();
    $pizzas = Pizza::latest()->get();

    return view('pizzas.index', [
      'pizzas' => $pizzas,
    ]);
  }

  public function show($id) {
    // use the $id variable to query the db for a record
    $pizza = Pizza::findOrFail($id);

    return view('pizzas.show', ['pizza' => $pizza]);
  }

  public function create() {
    
    return view('pizzas.create');
  }

}