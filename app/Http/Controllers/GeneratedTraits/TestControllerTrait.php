<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar377863369;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar377863369.index');
    }

    public function create()
    {
        return view('admin.testcar377863369.create');
    }

    public function edit(TestCar377863369 $testCar377863369)
    {
        return view('admin.testcar377863369.edit', compact('testCar377863369'));
    }

    public function show(TestCar377863369 $testCar377863369)
    {
        return view('admin.testcar377863369.show', compact('testCar377863369'));
    }
}
