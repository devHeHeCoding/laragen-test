<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1932055249;

use App\Models\TestCar1932055249;
                use App\Models\TestCar21756840759;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1932055249 $testCar1932055249;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1932055249->save();

        return redirect()->route('admin.testCar1932055249.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1932055249.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1932055249.prof._milan_ward_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
