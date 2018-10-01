<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Publisher;

class PublisherController extends Controller
{

    public function index() {
        $publishers = Publisher::all();
        return view('publishers/index')
                ->with('publishers', $publishers);
    }

    public function show($id) {
        $publisher = Publisher::find($id);
        return view('publishers/show')
                ->with('publisher', $publisher);
    }

}
