<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar629429290;
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
        $models = TestCar629429290::paginate();

        return $this->resourceToUse::collection($models);
    }
            public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar629429290::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }
            public function update(Request $request, TestCar629429290 $testCar629429290)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar629429290->update($validatedData);

        return new $this->resourceToUse($testCar629429290);
    }
            public function show(TestCar629429290 $testCar629429290)
    {
        return new $this->resourceToUse($testCar629429290);
    }
            public function destroy(TestCar629429290 $testCar629429290)
    {
        $testCar629429290->delete();
        return response()->noContent();
    }
  }
