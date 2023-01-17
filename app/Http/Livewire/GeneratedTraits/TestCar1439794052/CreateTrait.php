<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1439794052;

use App\Models\TestCar1439794052;
                use App\Models\TestCar2386963698;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1439794052 $testCar1439794052;

                                    public Collection $testCar2386963698s;
            
    public function mount(TestCar1439794052 $testCar1439794052)
    {
        $this->testCar1439794052 = $testCar1439794052;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1439794052->save();

        return redirect()->route('laragentestCar1439794052s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1439794052.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1439794052.jalon_stiedemann_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
