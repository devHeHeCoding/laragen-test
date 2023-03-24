<?php
namespace App\Http\Controllers\Generated\Namespace;

use App\Models\TestCar1739407355;
use Illuminate\Support\Facades\View;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait TestControllerTrait
{
    public function index()
    {
        if (View::exists('app.namespace.test.index')) {
            return view('app.namespace.test.index');
        }

        return view('app.generated.namespace.test.index');
    }

    public function create()
    {
        if (View::exists('app.generated.namespace.test.create')) {
            return view('app.generated.namespace.test.create');
        }

        return view('app.generated.namespace.test.create');
    }

    public function edit(TestCar1739407355 $testCar1739407355)
    {
        if (View::exists('app.namespace.test.edit')) {
            return view('app.namespace.test.edit', compact('testCar1739407355'));
        }

        return view('app.generated.namespace.test.edit', compact('testCar1739407355'));
    }

    public function show(TestCar1739407355 $testCar1739407355)
    {
        if (View::exists('app.generated.namespace.test.show')) {
            return view('app.generated.namespace.test.show', compact('testCar1739407355'));
        }

        return view('app.generated.namespace.test.show', compact('testCar1739407355'));
    }
}
