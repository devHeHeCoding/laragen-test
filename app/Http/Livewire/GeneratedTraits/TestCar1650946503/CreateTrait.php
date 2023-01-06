<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1650946503;

use App\Models\TestCar1650946503;
                use App\Models\TestCar213895648;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1650946503 $testCar1650946503;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1650946503->save();

        return redirect()->route('admin.testCar1650946503.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1650946503.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1650946503.seth_hermiston_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
