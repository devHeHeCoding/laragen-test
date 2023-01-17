<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1685974392;

use App\Models\TestCar1685974392;
                use App\Models\TestCar21827115572;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1685974392 $testCar1685974392;

                                    public Collection $testCar21827115572s;
            
    public function mount(TestCar1685974392 $testCar1685974392)
    {
        $this->testCar1685974392 = $testCar1685974392;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1685974392->save();

        return redirect()->route('laragentestCar1685974392s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1685974392.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1685974392.nils_abshire_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
