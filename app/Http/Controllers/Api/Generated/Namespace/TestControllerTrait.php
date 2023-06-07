<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar1727037688;
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
        $models = TestCar1727037688::paginate();

        return $this->resourceToUse::collection($models);
    }
            public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar1727037688::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }
            public function update(Request $request, TestCar1727037688 $testCar1727037688)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar1727037688->update($validatedData);

        return new $this->resourceToUse($testCar1727037688);
    }
            public function show(TestCar1727037688 $testCar1727037688)
    {
        return new $this->resourceToUse($testCar1727037688);
    }
            public function destroy(TestCar1727037688 $testCar1727037688)
    {
        $testCar1727037688->delete();
        return response()->noContent();
    }
  }
