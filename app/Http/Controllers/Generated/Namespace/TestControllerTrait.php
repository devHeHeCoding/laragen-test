<?php
namespace App\Http\Controllers\Generated\Namespace;

use App\Models\TestCar1817550501;
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
        if (BladeView::exists('app.generated.namespace.test.create')) {
            return view('app.generated.namespace.test.create');
        }

        return view('app.generated.namespace.test.create');
    }

    public function edit(TestCar1817550501 $testCar1817550501): View
    {
        if (BladeView::exists('app.namespace.test.edit')) {
            return view('app.namespace.test.edit', compact('testCar1817550501'));
        }

        return view('app.generated.namespace.test.edit', compact('testCar1817550501'));
    }

    public function show(TestCar1817550501 $testCar1817550501): View
    {
        if (BladeView::exists('app.generated.namespace.test.show')) {
            return view('app.generated.namespace.test.show', compact('testCar1817550501'));
        }

        return view('app.generated.namespace.test.show', compact('testCar1817550501'));
    }
}
