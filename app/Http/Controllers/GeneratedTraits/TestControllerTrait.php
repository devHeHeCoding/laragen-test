<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar722371413;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar722371413.index');
    }

    public function create()
    {
        return view('admin.testcar722371413.create');
    }

    public function edit(TestCar722371413 $testcar722371413)
    {
        return view('admin.testcar722371413.edit', compact('testcar722371413'));
    }

    public function show(TestCar722371413 $testcar722371413)
    {
        return view('admin.testcar722371413.show', compact('testcar722371413'));
    }
}
