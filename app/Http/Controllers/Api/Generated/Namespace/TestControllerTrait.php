<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar1191714687;
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
        $models = TestCar1191714687::paginate();

        return $this->resourceToUse::collection($models);
    }
            public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar1191714687::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }
            public function update(Request $request, TestCar1191714687 $testCar1191714687)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar1191714687->update($validatedData);

        return new $this->resourceToUse($testCar1191714687);
    }
            public function show(TestCar1191714687 $testCar1191714687)
    {
        return new $this->resourceToUse($testCar1191714687);
    }
            public function destroy(TestCar1191714687 $testCar1191714687)
    {
        $testCar1191714687->delete();
        return response()->noContent();
    }
  }
