<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2141853565;

use App\Models\TestCar2141853565;
                use App\Models\TestCar22098580209;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar2141853565 $testCar2141853565;

                                    public Collection $testCar22098580209s;
            
    public function mount(TestCar2141853565 $testCar2141853565)
    {
        $this->testCar2141853565 = $testCar2141853565;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar2141853565->save();

        return redirect()->route('laragentestCar2141853565s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar2141853565.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar2141853565.miss_hilda_schroeder_i_v_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
