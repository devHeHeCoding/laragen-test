<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar995898570;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar995898570.index');
    }

    public function create()
    {
        return view('admin.testcar995898570.create');
    }

    public function edit(TestCar995898570 $testCar995898570)
    {
        return view('admin.testcar995898570.edit', compact('testCar995898570'));
    }

    public function show(TestCar995898570 $testCar995898570)
    {
        return view('admin.testcar995898570.show', compact('testCar995898570'));
    }
}
