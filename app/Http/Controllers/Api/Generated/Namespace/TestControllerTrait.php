<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar515234683;
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
        $models = TestCar515234683::paginate();

        return $this->resourceToUse::collection($models);
    }
            public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar515234683::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }
            public function update(Request $request, TestCar515234683 $testCar515234683)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar515234683->update($validatedData);

        return new $this->resourceToUse($testCar515234683);
    }
            public function show(TestCar515234683 $testCar515234683)
    {
        return new $this->resourceToUse($testCar515234683);
    }
            public function destroy(TestCar515234683 $testCar515234683)
    {
        $testCar515234683->delete();
        return response()->noContent();
    }
  }
