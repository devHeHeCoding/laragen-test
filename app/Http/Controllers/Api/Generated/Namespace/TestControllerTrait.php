<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar1771296694;
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
        $models = TestCar1771296694::paginate();

        return $this->resourceToUse::collection($models);
    }
            public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar1771296694::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }
            public function update(Request $request, TestCar1771296694 $testCar1771296694)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar1771296694->update($validatedData);

        return new $this->resourceToUse($testCar1771296694);
    }
            public function show(TestCar1771296694 $testCar1771296694)
    {
        return new $this->resourceToUse($testCar1771296694);
    }
            public function destroy(TestCar1771296694 $testCar1771296694)
    {
        $testCar1771296694->delete();
        return response()->noContent();
    }
  }
