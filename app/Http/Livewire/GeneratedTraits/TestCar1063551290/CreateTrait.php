<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1063551290;

use App\Models\TestCar1063551290;
                use App\Models\TestCar21539113039;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1063551290 $testCar1063551290;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1063551290->save();

        return redirect()->route('admin.testCar1063551290.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1063551290.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1063551290.prof._burdette_fahey_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
