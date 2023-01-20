<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar650605431;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar650605431.index');
    }

    public function create()
    {
        return view('admin.testcar650605431.create');
    }

    public function edit(TestCar650605431 $testcar650605431)
    {
        return view('admin.testcar650605431.edit', compact('testcar650605431'));
    }

    public function show(TestCar650605431 $testcar650605431)
    {
        return view('admin.testcar650605431.show', compact('testcar650605431'));
    }
}
