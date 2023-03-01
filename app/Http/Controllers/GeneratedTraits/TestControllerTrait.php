<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2033733895;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2033733895.index');
    }

    public function create()
    {
        return view('admin.testcar2033733895.create');
    }

    public function edit(TestCar2033733895 $testCar2033733895)
    {
        return view('admin.testcar2033733895.edit', compact('testCar2033733895'));
    }

    public function show(TestCar2033733895 $testCar2033733895)
    {
        return view('admin.testcar2033733895.show', compact('testCar2033733895'));
    }
}
