<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1243674150;

use App\Models\TestCar1243674150;
use App\Models\TestCar21589776178;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1243674150 $testCar1243674150;

                        
    public function mount(TestCar1243674150 $testCar1243674150)
    {
        $this->testCar1243674150 = $testCar1243674150;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1243674150.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1243674150->save();

        return redirect()->route('laragen.admin.test_car1243674150s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1243674150.test' => [
                                                                                ],
                                                                    'testCar1243674150.stacey_turcotte_id' => [
                                                                                ],
                    ];
    }
}
