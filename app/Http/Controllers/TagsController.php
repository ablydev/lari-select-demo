<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Http\Requests;

class TagsController extends Controller
{
    public function index(){
        return Tag::all();
    }
    public function store(Request $request){
        return Tag::create($request->all());
    }
}
