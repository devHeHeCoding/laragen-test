<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1018804859;

use App\Models\TestCar1018804859;
                use App\Models\TestCar2176916428;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1018804859 $testCar1018804859;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1018804859->save();

        return redirect()->route('admin.testCar1018804859.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1018804859.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1018804859.prof._anderson_bashirian_m_d_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
