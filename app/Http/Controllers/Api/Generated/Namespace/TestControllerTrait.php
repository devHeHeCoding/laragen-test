<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar1256273147;
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
        $models = TestCar1256273147::paginate();

        return $this->resourceToUse::collection($models);
    }
            public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar1256273147::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }
            public function update(Request $request, TestCar1256273147 $testCar1256273147)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar1256273147->update($validatedData);

        return new $this->resourceToUse($testCar1256273147);
    }
            public function show(TestCar1256273147 $testCar1256273147)
    {
        return new $this->resourceToUse($testCar1256273147);
    }
            public function destroy(TestCar1256273147 $testCar1256273147)
    {
        $testCar1256273147->delete();
        return response()->noContent();
    }
  }
