<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar791739313;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar791739313.index');
    }

    public function create()
    {
        return view('admin.testcar791739313.create');
    }

    public function edit(TestCar791739313 $testCar791739313)
    {
        return view('admin.testcar791739313.edit', compact('testCar791739313'));
    }

    public function show(TestCar791739313 $testCar791739313)
    {
        return view('admin.testcar791739313.show', compact('testCar791739313'));
    }
}
