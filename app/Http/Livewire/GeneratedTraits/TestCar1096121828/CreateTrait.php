<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1096121828;

use App\Models\TestCar1096121828;
                use App\Models\TestCar22145735245;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1096121828 $testCar1096121828;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1096121828->save();

        return redirect()->route('admin.testCar1096121828.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1096121828.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1096121828.virginia_runolfsson_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
