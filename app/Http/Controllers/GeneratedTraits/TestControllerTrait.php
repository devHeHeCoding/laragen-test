<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar695328886;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar695328886.index');
    }

    public function create()
    {
        return view('admin.testcar695328886.create');
    }

    public function edit(TestCar695328886 $testCar695328886)
    {
        return view('admin.testcar695328886.edit', compact('testCar695328886'));
    }

    public function show(TestCar695328886 $testCar695328886)
    {
        return view('admin.testcar695328886.show', compact('testCar695328886'));
    }
}
