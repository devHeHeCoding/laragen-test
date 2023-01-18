<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1259655170;

use App\Models\TestCar1259655170;
                use App\Models\TestCar2575281069;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1259655170 $testCar1259655170;

                                    public Collection $testCar2575281069s;
            
    public function mount(TestCar1259655170 $testCar1259655170)
    {
        $this->testCar1259655170 = $testCar1259655170;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1259655170->save();

        return redirect()->route('laragentest_car1259655170s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1259655170.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1259655170.cathrine_durgan_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
