<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar920752408;
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
        $models = TestCar920752408::paginate();

        return $this->resourceToUse::collection($models);
    }
            public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar920752408::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }
            public function update(Request $request, TestCar920752408 $testCar920752408)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar920752408->update($validatedData);

        return new $this->resourceToUse($testCar920752408);
    }
            public function show(TestCar920752408 $testCar920752408)
    {
        return new $this->resourceToUse($testCar920752408);
    }
            public function destroy(TestCar920752408 $testCar920752408)
    {
        $testCar920752408->delete();
        return response()->noContent();
    }
  }
