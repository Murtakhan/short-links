<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Faker\Generator;
Use App\Link;

class LinksController extends Controller
{
    public function store(Request $request, Generator $faker)
    {
        $link = new Link();
        $link->origin_href = $request->input('link');
        $link->short_link = $faker->bothify('?#?#??##');
        $link->save();
        return response($link->jsonSerialize(), Response::HTTP_CREATED);
    }

    public function index()
    {
        return response(Link::all()->jsonSerialize(), Response::HTTP_OK);
    }
}
