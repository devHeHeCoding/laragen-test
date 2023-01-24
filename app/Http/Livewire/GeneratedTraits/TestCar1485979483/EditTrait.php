<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1485979483;

use App\Models\TestCar1485979483;
                use App\Models\TestCar2154942925;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1485979483 $testCar1485979483;

                                            
    public function mount(TestCar1485979483 $testCar1485979483)
    {
        $this->testCar1485979483 = $testCar1485979483;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1485979483->save();

        return redirect()->route('laragen.admin.test_car1485979483s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1485979483.test' => [
                                                                                                                ],
                                                'testCar1485979483.raphaelle_dooley_id' => [
                                                                                                                ],
                    ];
    }
}
