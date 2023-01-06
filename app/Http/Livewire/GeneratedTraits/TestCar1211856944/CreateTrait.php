<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1211856944;

use App\Models\TestCar1211856944;
                use App\Models\TestCar2928144845;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1211856944 $testCar1211856944;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1211856944->save();

        return redirect()->route('admin.testCar1211856944.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1211856944.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1211856944.kiarra_langworth_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
