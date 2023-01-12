<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar2081218688;

use App\Models\TestCar2081218688;
                use App\Models\TestCar2342199166;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar2081218688 $testCar2081218688;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar2081218688->save();

        return redirect()->route('admin.testCar2081218688.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar2081218688.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar2081218688.lucinda_reynolds_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
