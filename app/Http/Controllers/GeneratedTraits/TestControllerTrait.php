<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar911040946;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar911040946.index');
    }

    public function create()
    {
        return view('admin.testcar911040946.create');
    }

    public function edit(TestCar911040946 $testCar911040946)
    {
        return view('admin.testcar911040946.edit', compact('testCar911040946'));
    }

    public function show(TestCar911040946 $testCar911040946)
    {
        return view('admin.testcar911040946.show', compact('testCar911040946'));
    }
}
