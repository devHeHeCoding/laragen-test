<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar335945380;

use App\Models\TestCar335945380;
                use App\Models\TestCar2949460544;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar335945380 $testCar335945380;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar335945380->save();

        return redirect()->route('admin.testCar335945380.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar335945380.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar335945380.ethan_cronin_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
