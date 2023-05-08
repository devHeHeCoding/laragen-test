<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar1879320840;
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
        $models = TestCar1879320840::paginate();

        return $this->resourceToUse::collection($models);
    }
            public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar1879320840::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }
            public function update(Request $request, TestCar1879320840 $testCar1879320840)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar1879320840->update($validatedData);

        return new $this->resourceToUse($testCar1879320840);
    }
            public function show(TestCar1879320840 $testCar1879320840)
    {
        return new $this->resourceToUse($testCar1879320840);
    }
            public function destroy(TestCar1879320840 $testCar1879320840)
    {
        $testCar1879320840->delete();
        return response()->noContent();
    }
  }
