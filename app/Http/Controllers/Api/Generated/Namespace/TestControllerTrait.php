<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar1350901828;
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
        $models = TestCar1350901828::paginate();

        return $this->resourceToUse::collection($models);
    }
            public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar1350901828::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }
            public function update(Request $request, TestCar1350901828 $testCar1350901828)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar1350901828->update($validatedData);

        return new $this->resourceToUse($testCar1350901828);
    }
            public function show(TestCar1350901828 $testCar1350901828)
    {
        return new $this->resourceToUse($testCar1350901828);
    }
            public function destroy(TestCar1350901828 $testCar1350901828)
    {
        $testCar1350901828->delete();
        return response()->noContent();
    }
  }
