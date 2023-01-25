<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar96023851;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar96023851.index');
    }

    public function create()
    {
        return view('admin.testcar96023851.create');
    }

    public function edit(TestCar96023851 $testCar96023851)
    {
        return view('admin.testcar96023851.edit', compact('testCar96023851'));
    }

    public function show(TestCar96023851 $testCar96023851)
    {
        return view('admin.testcar96023851.show', compact('testCar96023851'));
    }
}
