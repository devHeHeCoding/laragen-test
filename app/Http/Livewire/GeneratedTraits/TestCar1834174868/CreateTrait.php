<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1834174868;

use App\Models\TestCar1834174868;
                use App\Models\TestCar21414786893;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1834174868 $testCar1834174868;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1834174868->save();

        return redirect()->route('admin.testCar1834174868.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1834174868.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1834174868.mr._brennan_mosciski_jr._id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
