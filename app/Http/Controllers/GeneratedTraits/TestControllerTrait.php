<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar761078444;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar761078444.index');
    }

    public function create()
    {
        return view('admin.testcar761078444.create');
    }

    public function edit(TestCar761078444 $testCar761078444)
    {
        return view('admin.testcar761078444.edit', compact('testCar761078444'));
    }

    public function show(TestCar761078444 $testCar761078444)
    {
        return view('admin.testcar761078444.show', compact('testCar761078444'));
    }
}
