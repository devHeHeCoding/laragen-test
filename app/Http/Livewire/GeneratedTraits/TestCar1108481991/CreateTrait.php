<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1108481991;

use App\Models\TestCar1108481991;
                use App\Models\TestCar2208814490;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1108481991 $testCar1108481991;

                                    public Collection $testCar2208814490s;
            
    public function mount(TestCar1108481991 $testCar1108481991)
    {
        $this->testCar1108481991 = $testCar1108481991;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1108481991->save();

        return redirect()->route('laragentest_car1108481991s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1108481991.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1108481991.mr._will_feeney_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
