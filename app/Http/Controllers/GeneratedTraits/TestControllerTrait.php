<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar527784445;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar527784445.index');
    }

    public function create()
    {
        return view('admin.testcar527784445.create');
    }

    public function edit(TestCar527784445 $testCar527784445)
    {
        return view('admin.testcar527784445.edit', compact('testCar527784445'));
    }

    public function show(TestCar527784445 $testCar527784445)
    {
        return view('admin.testcar527784445.show', compact('testCar527784445'));
    }
}
