<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1763696955;

use App\Models\TestCar1763696955;
                use App\Models\TestCar21775823819;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1763696955 $testCar1763696955;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1763696955->save();

        return redirect()->route('admin.testCar1763696955.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1763696955.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1763696955.francisca_lehner_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
