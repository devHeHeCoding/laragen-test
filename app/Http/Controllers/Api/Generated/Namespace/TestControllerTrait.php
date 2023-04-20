<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar85453210;
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
        $models = TestCar85453210::paginate();

        return $this->resourceToUse::collection($models);
    }
            public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar85453210::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }
            public function update(Request $request, TestCar85453210 $testCar85453210)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar85453210->update($validatedData);

        return new $this->resourceToUse($testCar85453210);
    }
            public function show(TestCar85453210 $testCar85453210)
    {
        return new $this->resourceToUse($testCar85453210);
    }
            public function destroy(TestCar85453210 $testCar85453210)
    {
        $testCar85453210->delete();
        return response()->noContent();
    }
  }
