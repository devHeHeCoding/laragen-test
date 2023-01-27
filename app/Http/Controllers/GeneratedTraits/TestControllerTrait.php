<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar617824993;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar617824993.index');
    }

    public function create()
    {
        return view('admin.testcar617824993.create');
    }

    public function edit(TestCar617824993 $testCar617824993)
    {
        return view('admin.testcar617824993.edit', compact('testCar617824993'));
    }

    public function show(TestCar617824993 $testCar617824993)
    {
        return view('admin.testcar617824993.show', compact('testCar617824993'));
    }
}
