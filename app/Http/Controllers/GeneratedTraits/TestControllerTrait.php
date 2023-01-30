<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar417718973;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar417718973.index');
    }

    public function create()
    {
        return view('admin.testcar417718973.create');
    }

    public function edit(TestCar417718973 $testCar417718973)
    {
        return view('admin.testcar417718973.edit', compact('testCar417718973'));
    }

    public function show(TestCar417718973 $testCar417718973)
    {
        return view('admin.testcar417718973.show', compact('testCar417718973'));
    }
}
