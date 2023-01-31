<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar535034191;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar535034191.index');
    }

    public function create()
    {
        return view('admin.testcar535034191.create');
    }

    public function edit(TestCar535034191 $testCar535034191)
    {
        return view('admin.testcar535034191.edit', compact('testCar535034191'));
    }

    public function show(TestCar535034191 $testCar535034191)
    {
        return view('admin.testcar535034191.show', compact('testCar535034191'));
    }
}
