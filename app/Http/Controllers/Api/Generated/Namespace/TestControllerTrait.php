<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar1764781652;
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
        $models = TestCar1764781652::paginate();

        return $this->resourceToUse::collection($models);
    }
            public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar1764781652::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }
            public function update(Request $request, TestCar1764781652 $testCar1764781652)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar1764781652->update($validatedData);

        return new $this->resourceToUse($testCar1764781652);
    }
            public function show(TestCar1764781652 $testCar1764781652)
    {
        return new $this->resourceToUse($testCar1764781652);
    }
            public function destroy(TestCar1764781652 $testCar1764781652)
    {
        $testCar1764781652->delete();
        return response()->noContent();
    }
  }
