<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1439794052;

use App\Models\TestCar1439794052;
                use App\Models\TestCar2386963698;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar2386963698s;
            
    public TestCar1439794052 $testCar1439794052;

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
                                                                                                                ],
                                                'testCar1439794052.jalon_stiedemann_id' => [
                                                                                                                ],
                    ];
    }
}
