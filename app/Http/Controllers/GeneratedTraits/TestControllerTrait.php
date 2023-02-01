<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar496868380;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar496868380.index');
    }

    public function create()
    {
        return view('admin.testcar496868380.create');
    }

    public function edit(TestCar496868380 $testCar496868380)
    {
        return view('admin.testcar496868380.edit', compact('testCar496868380'));
    }

    public function show(TestCar496868380 $testCar496868380)
    {
        return view('admin.testcar496868380.show', compact('testCar496868380'));
    }
}
