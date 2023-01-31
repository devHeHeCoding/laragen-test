<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2048076435;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2048076435.index');
    }

    public function create()
    {
        return view('admin.testcar2048076435.create');
    }

    public function edit(TestCar2048076435 $testCar2048076435)
    {
        return view('admin.testcar2048076435.edit', compact('testCar2048076435'));
    }

    public function show(TestCar2048076435 $testCar2048076435)
    {
        return view('admin.testcar2048076435.show', compact('testCar2048076435'));
    }
}
