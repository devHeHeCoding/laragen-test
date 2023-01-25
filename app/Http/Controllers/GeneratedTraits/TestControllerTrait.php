<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar776274332;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar776274332.index');
    }

    public function create()
    {
        return view('admin.testcar776274332.create');
    }

    public function edit(TestCar776274332 $testCar776274332)
    {
        return view('admin.testcar776274332.edit', compact('testCar776274332'));
    }

    public function show(TestCar776274332 $testCar776274332)
    {
        return view('admin.testcar776274332.show', compact('testCar776274332'));
    }
}
