<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1633802935;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1633802935.index');
    }

    public function create()
    {
        return view('admin.testcar1633802935.create');
    }

    public function edit(TestCar1633802935 $testCar1633802935)
    {
        return view('admin.testcar1633802935.edit', compact('testCar1633802935'));
    }

    public function show(TestCar1633802935 $testCar1633802935)
    {
        return view('admin.testcar1633802935.show', compact('testCar1633802935'));
    }
}
