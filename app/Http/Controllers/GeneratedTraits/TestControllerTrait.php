<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1363987257;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1363987257.index');
    }

    public function create()
    {
        return view('admin.testcar1363987257.create');
    }

    public function edit(TestCar1363987257 $testCar1363987257)
    {
        return view('admin.testcar1363987257.edit', compact('testCar1363987257'));
    }

    public function show(TestCar1363987257 $testCar1363987257)
    {
        return view('admin.testcar1363987257.show', compact('testCar1363987257'));
    }
}
