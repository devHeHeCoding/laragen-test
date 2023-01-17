<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar261697120;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar261697120.index');
    }

    public function create()
    {
        return view('admin.testcar261697120.create');
    }

    public function edit(TestCar261697120 $testcar261697120)
    {
        return view('admin.testcar261697120.edit', compact('testcar261697120'));
    }

    public function show(TestCar261697120 $testcar261697120)
    {
        return view('admin.testcar261697120.show', compact('testcar261697120'));
    }
}
