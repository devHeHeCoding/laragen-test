<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar664264609;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar664264609.index');
    }

    public function create()
    {
        return view('admin.testcar664264609.create');
    }

    public function edit(TestCar664264609 $testCar664264609)
    {
        return view('admin.testcar664264609.edit', compact('testCar664264609'));
    }

    public function show(TestCar664264609 $testCar664264609)
    {
        return view('admin.testcar664264609.show', compact('testCar664264609'));
    }
}
