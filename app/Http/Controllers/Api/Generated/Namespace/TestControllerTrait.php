<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar1911260058;
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
        $models = TestCar1911260058::paginate();

        return $this->resourceToUse::collection($models);
    }
            public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar1911260058::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }
            public function update(Request $request, TestCar1911260058 $testCar1911260058)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar1911260058->update($validatedData);

        return new $this->resourceToUse($testCar1911260058);
    }
            public function show(TestCar1911260058 $testCar1911260058)
    {
        return new $this->resourceToUse($testCar1911260058);
    }
            public function destroy(TestCar1911260058 $testCar1911260058)
    {
        $testCar1911260058->delete();
        return response()->noContent();
    }
  }
