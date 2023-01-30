<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1639058842;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1639058842.index');
    }

    public function create()
    {
        return view('admin.testcar1639058842.create');
    }

    public function edit(TestCar1639058842 $testCar1639058842)
    {
        return view('admin.testcar1639058842.edit', compact('testCar1639058842'));
    }

    public function show(TestCar1639058842 $testCar1639058842)
    {
        return view('admin.testcar1639058842.show', compact('testCar1639058842'));
    }
}
