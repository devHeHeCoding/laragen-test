<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar138541982;

use App\Models\TestCar138541982;
                use App\Models\TestCar2688302812;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar138541982 $testCar138541982;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar138541982->save();

        return redirect()->route('admin.testCar138541982.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar138541982.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar138541982.cruz_marks_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
