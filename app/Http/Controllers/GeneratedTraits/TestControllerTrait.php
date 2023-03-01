<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1568035282;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1568035282.index');
    }

    public function create()
    {
        return view('admin.testcar1568035282.create');
    }

    public function edit(TestCar1568035282 $testCar1568035282)
    {
        return view('admin.testcar1568035282.edit', compact('testCar1568035282'));
    }

    public function show(TestCar1568035282 $testCar1568035282)
    {
        return view('admin.testcar1568035282.show', compact('testCar1568035282'));
    }
}
