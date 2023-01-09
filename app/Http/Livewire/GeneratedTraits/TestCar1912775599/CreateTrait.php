<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1912775599;

use App\Models\TestCar1912775599;
                use App\Models\TestCar2689567286;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1912775599 $testCar1912775599;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1912775599->save();

        return redirect()->route('admin.testCar1912775599.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1912775599.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1912775599.melissa_kilback_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
