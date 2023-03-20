<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar646393988;

use App\Models\TestCar646393988;
use App\Models\TestCar2338776130;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar646393988 $testCar646393988;

                        
    public function mount(TestCar646393988 $testCar646393988)
    {
        $this->testCar646393988 = $testCar646393988;
                                }

    public function render()
    {
        return view('livewire.generated.test-car646393988.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar646393988->save();

        return redirect()->route('laragen.admin.test_car646393988s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar646393988.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar646393988.paula_mc_dermott_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
