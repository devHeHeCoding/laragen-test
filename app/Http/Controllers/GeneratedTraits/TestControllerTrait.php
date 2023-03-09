<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar592950477;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar592950477.index');
    }

    public function create()
    {
        return view('admin.testcar592950477.create');
    }

    public function edit(TestCar592950477 $testCar592950477)
    {
        return view('admin.testcar592950477.edit', compact('testCar592950477'));
    }

    public function show(TestCar592950477 $testCar592950477)
    {
        return view('admin.testcar592950477.show', compact('testCar592950477'));
    }
}
