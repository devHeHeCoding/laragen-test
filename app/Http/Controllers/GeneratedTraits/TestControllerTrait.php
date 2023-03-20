<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar304007891;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar304007891.index');
    }

    public function create()
    {
        return view('admin.testcar304007891.create');
    }

    public function edit(TestCar304007891 $testCar304007891)
    {
        return view('admin.testcar304007891.edit', compact('testCar304007891'));
    }

    public function show(TestCar304007891 $testCar304007891)
    {
        return view('admin.testcar304007891.show', compact('testCar304007891'));
    }
}
