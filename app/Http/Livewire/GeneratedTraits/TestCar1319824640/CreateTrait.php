<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1319824640;

use App\Models\TestCar1319824640;
use App\Models\TestCar22042193394;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1319824640 $testCar1319824640;

                        
    public function mount(TestCar1319824640 $testCar1319824640)
    {
        $this->testCar1319824640 = $testCar1319824640;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1319824640.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1319824640->save();

        return redirect()->route('laragen.admin.test_car1319824640s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1319824640.test' => [
                                                                                ],
                                                                    'testCar1319824640.josefina_ernser_id' => [
                                                                                ],
                    ];
    }
}
