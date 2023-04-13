<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar1732036924;
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
        $models = TestCar1732036924::paginate();

        return $this->resourceToUse::collection($models);
    }
            public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar1732036924::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }
            public function update(Request $request, TestCar1732036924 $testCar1732036924)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar1732036924->update($validatedData);

        return new $this->resourceToUse($testCar1732036924);
    }
            public function show(TestCar1732036924 $testCar1732036924)
    {
        return new $this->resourceToUse($testCar1732036924);
    }
            public function destroy(TestCar1732036924 $testCar1732036924)
    {
        $testCar1732036924->delete();
        return response()->noContent();
    }
  }
