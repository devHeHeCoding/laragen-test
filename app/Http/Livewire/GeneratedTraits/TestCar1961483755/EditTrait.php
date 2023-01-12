<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1961483755;

use App\Models\TestCar1961483755;
                use App\Models\TestCar21059050183;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1961483755 $testCar1961483755;

    public function mount(TestCar1961483755 $testCar1961483755)
    {
        $this->testCar1961483755 = $testCar1961483755;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1961483755->save();

        return redirect()->route('admin.testCar1961483755.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1961483755.test' => [
                                                                                                                ],
                                                'testCar1961483755.dorthy_pagac_id' => [
                                                                                                                ],
                    ];
    }
}
