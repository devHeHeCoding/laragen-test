<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1111311608;

use App\Models\TestCar1111311608;
                use App\Models\TestCar21161033108;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1111311608 $testCar1111311608;

                                    public Collection $testCar21161033108s;
            
    public function mount(TestCar1111311608 $testCar1111311608)
    {
        $this->testCar1111311608 = $testCar1111311608;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1111311608->save();

        return redirect()->route('laragentest_car1111311608s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1111311608.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1111311608.anthony_hintz_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
