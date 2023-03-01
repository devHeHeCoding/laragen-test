<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1139604965;

use App\Models\TestCar1139604965;
                    use App\Models\TestCar288403461;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1139604965 $testCar1139604965;

                                            
    public function mount(TestCar1139604965 $testCar1139604965)
    {
        $this->testCar1139604965 = $testCar1139604965;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1139604965.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1139604965->save();

        return redirect()->route('laragen.admin.test_car1139604965s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1139604965.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1139604965.miss_candida_cole_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
