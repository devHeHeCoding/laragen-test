<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar342094486;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar342094486.index');
    }

    public function create()
    {
        return view('admin.testcar342094486.create');
    }

    public function edit(TestCar342094486 $testCar342094486)
    {
        return view('admin.testcar342094486.edit', compact('testCar342094486'));
    }

    public function show(TestCar342094486 $testCar342094486)
    {
        return view('admin.testcar342094486.show', compact('testCar342094486'));
    }
}
