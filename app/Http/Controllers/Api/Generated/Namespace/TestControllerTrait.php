<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar1669184493;
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
        $models = TestCar1669184493::paginate();

        return $this->resourceToUse::collection($models);
    }
            public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar1669184493::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }
            public function update(Request $request, TestCar1669184493 $testCar1669184493)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar1669184493->update($validatedData);

        return new $this->resourceToUse($testCar1669184493);
    }
            public function show(TestCar1669184493 $testCar1669184493)
    {
        return new $this->resourceToUse($testCar1669184493);
    }
            public function destroy(TestCar1669184493 $testCar1669184493)
    {
        $testCar1669184493->delete();
        return response()->noContent();
    }
  }
