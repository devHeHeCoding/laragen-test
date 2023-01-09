<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar386884279;

use App\Models\TestCar386884279;
                use App\Models\TestCar21655229974;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar386884279 $testCar386884279;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar386884279->save();

        return redirect()->route('admin.testCar386884279.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar386884279.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar386884279.domenico_will_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
