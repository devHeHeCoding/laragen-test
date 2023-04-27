<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar172553734;
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
        $models = TestCar172553734::paginate();

        return $this->resourceToUse::collection($models);
    }
            public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar172553734::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }
            public function update(Request $request, TestCar172553734 $testCar172553734)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar172553734->update($validatedData);

        return new $this->resourceToUse($testCar172553734);
    }
            public function show(TestCar172553734 $testCar172553734)
    {
        return new $this->resourceToUse($testCar172553734);
    }
            public function destroy(TestCar172553734 $testCar172553734)
    {
        $testCar172553734->delete();
        return response()->noContent();
    }
  }
