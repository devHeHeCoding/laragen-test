<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar1884542556;
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
        $models = TestCar1884542556::paginate();

        return $this->resourceToUse::collection($models);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar1884542556::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }

    public function update(Request $request, TestCar1884542556 $testCar1884542556)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar1884542556->update($validatedData);

        return new $this->resourceToUse($testCar1884542556);
    }

    public function show(TestCar1884542556 $testCar1884542556)
    {
        return new $this->resourceToUse($testCar1884542556);
    }

    public function destroy(TestCar1884542556 $testCar1884542556)
    {
        $testCar1884542556->delete();
        return response()->noContent();
    }
}
