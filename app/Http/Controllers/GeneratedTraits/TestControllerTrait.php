<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar330993769;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar330993769.index');
    }

    public function create()
    {
        return view('admin.testcar330993769.create');
    }

    public function edit(TestCar330993769 $testCar330993769)
    {
        return view('admin.testcar330993769.edit', compact('testCar330993769'));
    }

    public function show(TestCar330993769 $testCar330993769)
    {
        return view('admin.testcar330993769.show', compact('testCar330993769'));
    }
}
