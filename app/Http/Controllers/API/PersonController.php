<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Person\StoreRequest;
use App\Models\Person;

class PersonController extends Controller
{
    public function index()
    {
        $persons= [
            [
                "id" => 1,
                "name" => 'Anna',
                "age" => 20,
                "job" => 'coach'
            ],
            [
                "id" => 2,
                "name" => 'Dan',
                "age" => 34,
                "job" => 'seller'
            ],
            [
                "id" => 3,
                "name" => 'Iris',
                "age" => 26,
                "job" => 'traveler'
            ],
            [
                "id" => 4,
                "name" => 'Petya',
                "age" => 28,
                "job" => 'teacher'
            ],
            [
                "id" => 5,
                "name" => 'Anna',
                "age" => 17,
                "job" => 'rest'
            ],
        ];
        return $persons;
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $person = Person::create($data);
        return $person;
    }
}
