<?php

namespace App\Http\Resources\Person;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PersonCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        dd($request);

       /* return [
            'people' => $this->collection->transform(function($person){
                return [
                    'id' => $person->id,
                    'name' => $person->name,
                    'age' => $person->age,
                    'job' => $person->job,
                ];
            }),
            'meta' => [
                'total_people' => $this->collection->count(),
            ],
        ];*/

    }
}
