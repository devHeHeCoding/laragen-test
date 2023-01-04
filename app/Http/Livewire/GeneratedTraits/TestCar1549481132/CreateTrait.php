<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1549481132;

use App\Models\TestCar1549481132;
                use App\Models\TestCar21347936844;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1549481132 $testCar1549481132;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1549481132->save();

        return redirect()->route('admin.testCar1549481132.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1549481132.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1549481132.ms._glenda_moore_i_i_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
