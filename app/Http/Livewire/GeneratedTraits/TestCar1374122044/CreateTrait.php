<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1374122044;

use App\Models\TestCar1374122044;
                use App\Models\TestCar2170833202;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1374122044 $testCar1374122044;

                                            
    public function mount(TestCar1374122044 $testCar1374122044)
    {
        $this->testCar1374122044 = $testCar1374122044;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1374122044->save();

        return redirect()->route('laragen.admin.test_car1374122044s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1374122044.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1374122044.prof._margarett_kuhic_d_v_m_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
