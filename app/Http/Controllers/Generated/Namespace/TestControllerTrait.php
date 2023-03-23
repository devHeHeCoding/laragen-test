<?php
namespace App\Http\Controllers\Generated\Namespace;

use App\Models\TestCar1436258828;
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

    public function edit(namespace.test)
    {
        if (View::exists('app.namespace.test.edit')) {
            return view('app.namespace.test.edit', compact('testCar1436258828'));
        }

        return view('app.generated.namespace.test.edit', compact('testCar1436258828'));
    }

    public function show(TestCar1436258828 $testCar1436258828)
    {
        if (View::exists('app.generated.namespace.test.show')) {
            return view('app.generated.namespace.test.show', compact('testCar1436258828'));
        }

        return view('app.generated.namespace.test.show', compact('testCar1436258828'));
    }
}
