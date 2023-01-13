<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar512320321;

use App\Models\TestCar512320321;
                use App\Models\TestCar2631586454;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar512320321 $testCar512320321;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar512320321->save();

        return redirect()->route('admin.testCar512320321.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar512320321.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar512320321.albina_gleason_i_i_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
