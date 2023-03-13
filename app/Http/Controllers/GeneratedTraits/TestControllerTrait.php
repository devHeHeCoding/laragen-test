<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1936681020;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1936681020.index');
    }

    public function create()
    {
        return view('admin.testcar1936681020.create');
    }

    public function edit(TestCar1936681020 $testCar1936681020)
    {
        return view('admin.testcar1936681020.edit', compact('testCar1936681020'));
    }

    public function show(TestCar1936681020 $testCar1936681020)
    {
        return view('admin.testcar1936681020.show', compact('testCar1936681020'));
    }
}
