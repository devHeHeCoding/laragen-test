<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1635964799;

use App\Models\TestCar1635964799;
                use App\Models\TestCar22127192660;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1635964799 $testCar1635964799;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1635964799->save();

        return redirect()->route('admin.testCar1635964799.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1635964799.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1635964799.vida_kuhlman_v_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
