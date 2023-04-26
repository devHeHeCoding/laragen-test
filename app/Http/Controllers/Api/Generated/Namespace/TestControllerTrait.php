<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar126577550;
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
        $models = TestCar126577550::paginate();

        return $this->resourceToUse::collection($models);
    }
            public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar126577550::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }
            public function update(Request $request, TestCar126577550 $testCar126577550)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar126577550->update($validatedData);

        return new $this->resourceToUse($testCar126577550);
    }
            public function show(TestCar126577550 $testCar126577550)
    {
        return new $this->resourceToUse($testCar126577550);
    }
            public function destroy(TestCar126577550 $testCar126577550)
    {
        $testCar126577550->delete();
        return response()->noContent();
    }
  }
