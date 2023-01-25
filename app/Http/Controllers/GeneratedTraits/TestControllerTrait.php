<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar623301657;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar623301657.index');
    }

    public function create()
    {
        return view('admin.testcar623301657.create');
    }

    public function edit(TestCar623301657 $testCar623301657)
    {
        return view('admin.testcar623301657.edit', compact('testCar623301657'));
    }

    public function show(TestCar623301657 $testCar623301657)
    {
        return view('admin.testcar623301657.show', compact('testCar623301657'));
    }
}
