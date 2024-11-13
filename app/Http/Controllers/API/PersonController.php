<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Person\StoreRequest;
use App\Http\Requests\Person\UpdateRequest;
use App\Http\Resources\Person\PersonCollection;
use App\Http\Resources\Person\PersonResource;
use App\Models\Person;

class PersonController extends Controller
{
    public function index()
    {
        $people = Person::all();

        return PersonResource::collection($people);
    }

    public function show(Person $person)
    {
        return new PersonResource($person);
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $person = Person::create($data);

        //return new PersonResource($person);
        return response([]);
    }

    public function update(UpdateRequest $request, Person $person)
    {
        $data = $request->validated();
        $person->update($data);

       // return new PersonResource($person);
        return response([]);
    }

    public function destroy(Person $person)
    {
        $person->delete();

        return response([]);
    }
}
