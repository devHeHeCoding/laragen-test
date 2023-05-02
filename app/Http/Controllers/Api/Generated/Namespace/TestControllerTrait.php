<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar1481583318;
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
        $models = TestCar1481583318::paginate();

        return $this->resourceToUse::collection($models);
    }
            public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar1481583318::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }
            public function update(Request $request, TestCar1481583318 $testCar1481583318)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar1481583318->update($validatedData);

        return new $this->resourceToUse($testCar1481583318);
    }
            public function show(TestCar1481583318 $testCar1481583318)
    {
        return new $this->resourceToUse($testCar1481583318);
    }
            public function destroy(TestCar1481583318 $testCar1481583318)
    {
        $testCar1481583318->delete();
        return response()->noContent();
    }
  }
