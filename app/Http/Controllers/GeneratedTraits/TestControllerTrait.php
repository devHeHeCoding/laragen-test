<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar800504245;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar800504245.index');
    }

    public function create()
    {
        return view('admin.testcar800504245.create');
    }

    public function edit(TestCar800504245 $testCar800504245)
    {
        return view('admin.testcar800504245.edit', compact('testCar800504245'));
    }

    public function show(TestCar800504245 $testCar800504245)
    {
        return view('admin.testcar800504245.show', compact('testCar800504245'));
    }
}
