<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar425811051;

use App\Models\TestCar425811051;
                use App\Models\TestCar21562193368;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar425811051 $testCar425811051;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar425811051->save();

        return redirect()->route('admin.testCar425811051.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar425811051.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar425811051.mrs._edwina_dickinson_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
