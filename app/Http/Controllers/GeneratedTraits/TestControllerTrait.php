<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar776051337;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar776051337.index');
    }

    public function create()
    {
        return view('admin.testcar776051337.create');
    }

    public function edit(TestCar776051337 $testCar776051337)
    {
        return view('admin.testcar776051337.edit', compact('testCar776051337'));
    }

    public function show(TestCar776051337 $testCar776051337)
    {
        return view('admin.testcar776051337.show', compact('testCar776051337'));
    }
}
