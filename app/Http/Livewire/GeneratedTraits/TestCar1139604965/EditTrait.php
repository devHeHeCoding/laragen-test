<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1139604965;

use App\Models\TestCar1139604965;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1139604965 $testCar1139604965;

                        
    public function mount(TestCar1139604965 $testCar1139604965)
    {
        $this->testCar1139604965 = $testCar1139604965;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1139604965.edit');
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
                                                                                                                ],
                    ];
    }
}
