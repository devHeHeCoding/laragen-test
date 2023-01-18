<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar749866031;

use App\Models\TestCar749866031;
                use App\Models\TestCar2116749421;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar749866031 $testCar749866031;

                                    public Collection $testCar2116749421s;
            
    public function mount(TestCar749866031 $testCar749866031)
    {
        $this->testCar749866031 = $testCar749866031;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar749866031->save();

        return redirect()->route('laragen.admin.test_car749866031s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar749866031.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar749866031.mr._kameron_lakin_jr._id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
