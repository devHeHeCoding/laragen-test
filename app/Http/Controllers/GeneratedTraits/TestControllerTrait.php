<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar289518111;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar289518111.index');
    }

    public function create()
    {
        return view('admin.testcar289518111.create');
    }

    public function edit(TestCar289518111 $testCar289518111)
    {
        return view('admin.testcar289518111.edit', compact('testCar289518111'));
    }

    public function show(TestCar289518111 $testCar289518111)
    {
        return view('admin.testcar289518111.show', compact('testCar289518111'));
    }
}
