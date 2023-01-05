<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar99188925;

use App\Models\TestCar99188925;
                use App\Models\TestCar2691896388;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar99188925 $testCar99188925;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar99188925->save();

        return redirect()->route('admin.testCar99188925.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar99188925.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar99188925.carolanne_dickens_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
