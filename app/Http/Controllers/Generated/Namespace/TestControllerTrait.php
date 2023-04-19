<?php
namespace App\Http\Controllers\Generated\Namespace;

use App\Models\TestCar376290551;
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

    public function edit(TestCar376290551 $testCar376290551): View
    {
        if (BladeView::exists('app.namespace.test.edit')) {
            return view('app.namespace.test.edit', compact('testCar376290551'));
        }

        return view('app.generated.namespace.test.edit', compact('testCar376290551'));
    }
    public function show(TestCar376290551 $testCar376290551): View
    {
        if (BladeView::exists('app.namespace.test.show')) {
            return view('app.namespace.test.show', compact('testCar376290551'));
        }

        return view('app.generated.namespace.test.show', compact('testCar376290551'));
    }
}
