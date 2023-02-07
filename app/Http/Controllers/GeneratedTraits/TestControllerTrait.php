<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar231076716;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar231076716.index');
    }

    public function create()
    {
        return view('admin.testcar231076716.create');
    }

    public function edit(TestCar231076716 $testCar231076716)
    {
        return view('admin.testcar231076716.edit', compact('testCar231076716'));
    }

    public function show(TestCar231076716 $testCar231076716)
    {
        return view('admin.testcar231076716.show', compact('testCar231076716'));
    }
}
