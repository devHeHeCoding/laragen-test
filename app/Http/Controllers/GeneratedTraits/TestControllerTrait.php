<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar476267929;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar476267929.index');
    }

    public function create()
    {
        return view('admin.testcar476267929.create');
    }

    public function edit(TestCar476267929 $testCar476267929)
    {
        return view('admin.testcar476267929.edit', compact('testCar476267929'));
    }

    public function show(TestCar476267929 $testCar476267929)
    {
        return view('admin.testcar476267929.show', compact('testCar476267929'));
    }
}
