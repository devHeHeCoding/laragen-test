<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar1084357990;
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
        $models = TestCar1084357990::paginate();

        return $this->resourceToUse::collection($models);
    }
            public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar1084357990::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }
            public function update(Request $request, TestCar1084357990 $testCar1084357990)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar1084357990->update($validatedData);

        return new $this->resourceToUse($testCar1084357990);
    }
            public function show(TestCar1084357990 $testCar1084357990)
    {
        return new $this->resourceToUse($testCar1084357990);
    }
            public function destroy(TestCar1084357990 $testCar1084357990)
    {
        $testCar1084357990->delete();
        return response()->noContent();
    }
  }
