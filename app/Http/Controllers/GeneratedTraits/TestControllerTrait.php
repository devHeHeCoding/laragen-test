<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar276494793;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar276494793.index');
    }

    public function create()
    {
        return view('admin.testcar276494793.create');
    }

    public function edit(TestCar276494793 $testCar276494793)
    {
        return view('admin.testcar276494793.edit', compact('testCar276494793'));
    }

    public function show(TestCar276494793 $testCar276494793)
    {
        return view('admin.testcar276494793.show', compact('testCar276494793'));
    }
}
