<?php
namespace App\Http\Controllers\Generated\Namespace;

use App\Models\TestCar2076848170;
use Illuminate\Support\Facades\View as BladeView;
use Illuminate\View\View;
/**
* Generated by LaraGen, Do not modify it manually.
*/
trait TestControllerTrait
{
    public function index(): View
    {
        if (BladeView::exists('app.namespace.test.index')) {
            return view('app.namespace.test.index');
        }

        return view('app.generated.namespace.test.index');
    }

    public function create(): View
    {
        if (BladeView::exists('app.namespace.test.create')) {
            return view('app.namespace.test.create');
        }

        return view('app.generated.namespace.test.create');
    }

    public function edit(TestCar2076848170 $testCar2076848170): View
    {
        if (BladeView::exists('app.namespace.test.edit')) {
            return view('app.namespace.test.edit', compact('testCar2076848170'));
        }

        return view('app.generated.namespace.test.edit', compact('testCar2076848170'));
    }
    public function show(TestCar2076848170 $testCar2076848170): View
    {
        if (BladeView::exists('app.namespace.test.show')) {
            return view('app.namespace.test.show', compact('testCar2076848170'));
        }

        return view('app.generated.namespace.test.show', compact('testCar2076848170'));
    }
}
