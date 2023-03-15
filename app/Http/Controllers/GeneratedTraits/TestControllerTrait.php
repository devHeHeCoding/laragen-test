<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar593990579;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar593990579.index');
    }

    public function create()
    {
        return view('admin.testcar593990579.create');
    }

    public function edit(TestCar593990579 $testCar593990579)
    {
        return view('admin.testcar593990579.edit', compact('testCar593990579'));
    }

    public function show(TestCar593990579 $testCar593990579)
    {
        return view('admin.testcar593990579.show', compact('testCar593990579'));
    }
}
