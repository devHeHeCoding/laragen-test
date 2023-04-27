<?php
namespace App\Http\Controllers\Generated\Namespace;

use App\Models\TestCar1797505427;
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

    public function edit(TestCar1797505427 $testCar1797505427): View
    {
        if (BladeView::exists('app.namespace.test.edit')) {
            return view('app.namespace.test.edit', compact('testCar1797505427'));
        }

        return view('app.generated.namespace.test.edit', compact('testCar1797505427'));
    }
    public function show(TestCar1797505427 $testCar1797505427): View
    {
        if (BladeView::exists('app.namespace.test.show')) {
            return view('app.namespace.test.show', compact('testCar1797505427'));
        }

        return view('app.generated.namespace.test.show', compact('testCar1797505427'));
    }
}
