<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar2013868899;

use App\Models\TestCar2013868899;
                use App\Models\TestCar2655759571;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar2013868899 $testCar2013868899;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar2013868899->save();

        return redirect()->route('admin.testCar2013868899.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar2013868899.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar2013868899.vance_brown_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
