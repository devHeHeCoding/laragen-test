<?php
namespace App\Http\Controllers\Api\Generated\Namespace;

use App\Models\TestCar1452181572;
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
        $models = TestCar1452181572::paginate();

        return $this->resourceToUse::collection($models);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
                    ]);

        $newModel = TestCar1452181572::create($validatedData);

        return (new $this->resourceToUse($newModel))->response()->setStatusCode(201);
    }

    public function update(Request $request, TestCar1452181572 $testCar1452181572)
    {
        $validatedData = $request->validate([
                    ]);

        $testCar1452181572->update($validatedData);

        return new $this->resourceToUse($testCar1452181572);
    }

    public function show(TestCar1452181572 $testCar1452181572)
    {
        return new $this->resourceToUse($testCar1452181572);
    }

    public function destroy(TestCar1452181572 $testCar1452181572)
    {
        $testCar1452181572->delete();
        return response()->noContent();
    }
}
