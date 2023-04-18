<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar1862278646;
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
        $models = TestCar1862278646::paginate();

        return $this->resourceToUse::collection($models);
    }
            public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar1862278646::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }
            public function update(Request $request, TestCar1862278646 $testCar1862278646)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar1862278646->update($validatedData);

        return new $this->resourceToUse($testCar1862278646);
    }
            public function show(TestCar1862278646 $testCar1862278646)
    {
        return new $this->resourceToUse($testCar1862278646);
    }
            public function destroy(TestCar1862278646 $testCar1862278646)
    {
        $testCar1862278646->delete();
        return response()->noContent();
    }
  }
