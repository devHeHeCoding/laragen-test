<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar1260812686;
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
        $models = TestCar1260812686::paginate();

        return $this->resourceToUse::collection($models);
    }
            public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar1260812686::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }
            public function update(Request $request, TestCar1260812686 $testCar1260812686)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar1260812686->update($validatedData);

        return new $this->resourceToUse($testCar1260812686);
    }
            public function show(TestCar1260812686 $testCar1260812686)
    {
        return new $this->resourceToUse($testCar1260812686);
    }
            public function destroy(TestCar1260812686 $testCar1260812686)
    {
        $testCar1260812686->delete();
        return response()->noContent();
    }
  }
