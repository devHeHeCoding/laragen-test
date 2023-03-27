<?php
namespace App\Http\Controllers\Generated\Namespace;

use App\Models\TestCar983603531;
use Illuminate\Support\Facades\View;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait TestControllerTrait
{
    public function index(): View
    {
        if (View::exists('app.namespace.test.index')) {
            return view('app.namespace.test.index');
        }

        return view('app.generated.namespace.test.index');
    }

    public function create(): View
    {
        if (View::exists('app.generated.namespace.test.create')) {
            return view('app.generated.namespace.test.create');
        }

        return view('app.generated.namespace.test.create');
    }

    public function edit(TestCar983603531 $testCar983603531): View
    {
        if (View::exists('app.namespace.test.edit')) {
            return view('app.namespace.test.edit', compact('testCar983603531'));
        }

        return view('app.generated.namespace.test.edit', compact('testCar983603531'));
    }

    public function show(TestCar983603531 $testCar983603531): View
    {
        if (View::exists('app.generated.namespace.test.show')) {
            return view('app.generated.namespace.test.show', compact('testCar983603531'));
        }

        return view('app.generated.namespace.test.show', compact('testCar983603531'));
    }
}
