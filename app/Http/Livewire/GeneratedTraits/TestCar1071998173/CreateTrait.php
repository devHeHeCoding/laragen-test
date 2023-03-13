<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1071998173;

use App\Models\TestCar1071998173;
use App\Models\TestCar22133327760;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1071998173 $testCar1071998173;

                        
    public function mount(TestCar1071998173 $testCar1071998173)
    {
        $this->testCar1071998173 = $testCar1071998173;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1071998173.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1071998173->save();

        return redirect()->route('laragen.admin.test_car1071998173s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1071998173.test' => [
                                                                                ],
                                                                    'testCar1071998173.prof._mariam_runolfsdottir_d_d_s_id' => [
                                                                                ],
                    ];
    }
}
