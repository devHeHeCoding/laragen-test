<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar878828653;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar878828653.index');
    }

    public function create()
    {
        return view('admin.testcar878828653.create');
    }

    public function edit(TestCar878828653 $testcar878828653)
    {
        return view('admin.testcar878828653.edit', compact('testcar878828653'));
    }

    public function show(TestCar878828653 $testcar878828653)
    {
        return view('admin.testcar878828653.show', compact('testcar878828653'));
    }
}
