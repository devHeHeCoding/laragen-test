<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1975194882;

use App\Models\TestCar1975194882;
                use App\Models\TestCar21167779156;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1975194882 $testCar1975194882;

                                            
    public function mount(TestCar1975194882 $testCar1975194882)
    {
        $this->testCar1975194882 = $testCar1975194882;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1975194882->save();

        return redirect()->route('laragen.admin.test_car1975194882s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1975194882.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1975194882.dr._florine_harris_ph_d_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
