<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1840422296;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1840422296.index');
    }

    public function create()
    {
        return view('admin.testcar1840422296.create');
    }

    public function edit(TestCar1840422296 $testCar1840422296)
    {
        return view('admin.testcar1840422296.edit', compact('testCar1840422296'));
    }

    public function show(TestCar1840422296 $testCar1840422296)
    {
        return view('admin.testcar1840422296.show', compact('testCar1840422296'));
    }
}
