<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar991503920;

use App\Models\TestCar991503920;
                use App\Models\TestCar2404148293;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar991503920 $testCar991503920;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar991503920->save();

        return redirect()->route('admin.testCar991503920.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar991503920.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar991503920.ms._tiana_bergnaum_v_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
