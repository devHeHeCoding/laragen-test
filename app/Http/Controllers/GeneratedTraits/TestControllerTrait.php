<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1188616842;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1188616842.index');
    }

    public function create()
    {
        return view('admin.testcar1188616842.create');
    }

    public function edit(TestCar1188616842 $testCar1188616842)
    {
        return view('admin.testcar1188616842.edit', compact('testCar1188616842'));
    }

    public function show(TestCar1188616842 $testCar1188616842)
    {
        return view('admin.testcar1188616842.show', compact('testCar1188616842'));
    }
}
