<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar194840499;
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
        $models = TestCar194840499::paginate();

        return $this->resourceToUse::collection($models);
    }
            public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar194840499::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }
            public function update(Request $request, TestCar194840499 $testCar194840499)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar194840499->update($validatedData);

        return new $this->resourceToUse($testCar194840499);
    }
            public function show(TestCar194840499 $testCar194840499)
    {
        return new $this->resourceToUse($testCar194840499);
    }
            public function destroy(TestCar194840499 $testCar194840499)
    {
        $testCar194840499->delete();
        return response()->noContent();
    }
  }
