<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar968074012;

use App\Models\TestCar968074012;
                use App\Models\TestCar21885521896;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar968074012 $testCar968074012;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar968074012->save();

        return redirect()->route('admin.testCar968074012.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar968074012.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar968074012.miss_kara_ward_ph_d_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
