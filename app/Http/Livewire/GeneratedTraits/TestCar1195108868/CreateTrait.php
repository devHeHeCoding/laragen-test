<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1195108868;

use App\Models\TestCar1195108868;
                use App\Models\TestCar21489789060;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1195108868 $testCar1195108868;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1195108868->save();

        return redirect()->route('admin.testCar1195108868.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1195108868.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1195108868.kamryn_barrows_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
