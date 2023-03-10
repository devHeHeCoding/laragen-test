<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar163136273;

use App\Models\TestCar163136273;
use App\Models\TestCar2432057315;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar163136273 $testCar163136273;

                        
    public function mount(TestCar163136273 $testCar163136273)
    {
        $this->testCar163136273 = $testCar163136273;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car163136273.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar163136273->save();

        return redirect()->route('laragen.admin.test_car163136273s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar163136273.test' => [
                                                                                ],
                                                                    'testCar163136273.dariana_swaniawski_id' => [
                                                                                ],
                    ];
    }
}
