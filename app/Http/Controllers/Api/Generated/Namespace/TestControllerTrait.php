<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar1797505427;
use App\Http\Resources\GenericResource;
use Illuminate\Http\Request;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait TestControllerTrait
{
    public string $resourceToUse = GenericResource::class;

        public function index()
    {
        $models = TestCar1797505427::paginate();

        return $this->resourceToUse::collection($models);
    }
            public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar1797505427::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }
            public function update(Request $request, TestCar1797505427 $testCar1797505427)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar1797505427->update($validatedData);

        return new $this->resourceToUse($testCar1797505427);
    }
            public function show(TestCar1797505427 $testCar1797505427)
    {
        return new $this->resourceToUse($testCar1797505427);
    }
            public function destroy(TestCar1797505427 $testCar1797505427)
    {
        $testCar1797505427->delete();
        return response()->noContent();
    }
  }
