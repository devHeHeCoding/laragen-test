<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar252691639;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar252691639.index');
    }

    public function create()
    {
        return view('admin.testcar252691639.create');
    }

    public function edit(TestCar252691639 $testCar252691639)
    {
        return view('admin.testcar252691639.edit', compact('testCar252691639'));
    }

    public function show(TestCar252691639 $testCar252691639)
    {
        return view('admin.testcar252691639.show', compact('testCar252691639'));
    }
}
