<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar800783990;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar800783990.index');
    }

    public function create()
    {
        return view('admin.testcar800783990.create');
    }

    public function edit(TestCar800783990 $testCar800783990)
    {
        return view('admin.testcar800783990.edit', compact('testCar800783990'));
    }

    public function show(TestCar800783990 $testCar800783990)
    {
        return view('admin.testcar800783990.show', compact('testCar800783990'));
    }
}
