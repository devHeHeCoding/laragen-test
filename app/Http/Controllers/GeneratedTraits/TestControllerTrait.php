<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar236489217;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar236489217.index');
    }

    public function create()
    {
        return view('admin.testcar236489217.create');
    }

    public function edit(TestCar236489217 $testCar236489217)
    {
        return view('admin.testcar236489217.edit', compact('testCar236489217'));
    }

    public function show(TestCar236489217 $testCar236489217)
    {
        return view('admin.testcar236489217.show', compact('testCar236489217'));
    }
}
