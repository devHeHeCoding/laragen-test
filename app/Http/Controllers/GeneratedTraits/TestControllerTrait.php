<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2069207647;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2069207647.index');
    }

    public function create()
    {
        return view('admin.testcar2069207647.create');
    }

    public function edit(TestCar2069207647 $testCar2069207647)
    {
        return view('admin.testcar2069207647.edit', compact('testCar2069207647'));
    }

    public function show(TestCar2069207647 $testCar2069207647)
    {
        return view('admin.testcar2069207647.show', compact('testCar2069207647'));
    }
}
