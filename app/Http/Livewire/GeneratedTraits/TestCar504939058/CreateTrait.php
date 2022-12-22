<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar504939058;

use App\Models\TestCar504939058;
                use App\Models\TestCar2739897333;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar504939058 $testCar504939058;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar504939058->save();

        return redirect()->route('admin.testCar504939058.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar504939058.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar504939058.forest_bogan_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
