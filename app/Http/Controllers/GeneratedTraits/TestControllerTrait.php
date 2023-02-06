<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar851343037;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar851343037.index');
    }

    public function create()
    {
        return view('admin.testcar851343037.create');
    }

    public function edit(TestCar851343037 $testCar851343037)
    {
        return view('admin.testcar851343037.edit', compact('testCar851343037'));
    }

    public function show(TestCar851343037 $testCar851343037)
    {
        return view('admin.testcar851343037.show', compact('testCar851343037'));
    }
}
