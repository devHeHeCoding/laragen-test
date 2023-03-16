<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1105510463;

use App\Models\TestCar1105510463;
use App\Models\TestCar2700197140;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1105510463 $testCar1105510463;

                        
    public function mount(TestCar1105510463 $testCar1105510463)
    {
        $this->testCar1105510463 = $testCar1105510463;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1105510463.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1105510463->save();

        return redirect()->route('laragen.admin.test_car1105510463s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1105510463.test' => [
                                                                                ],
                                                                    'testCar1105510463.hayley_ritchie_id' => [
                                                                                ],
                    ];
    }
}
