<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2096628681;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2096628681.index');
    }

    public function create()
    {
        return view('admin.testcar2096628681.create');
    }

    public function edit(TestCar2096628681 $testCar2096628681)
    {
        return view('admin.testcar2096628681.edit', compact('testCar2096628681'));
    }

    public function show(TestCar2096628681 $testCar2096628681)
    {
        return view('admin.testcar2096628681.show', compact('testCar2096628681'));
    }
}
