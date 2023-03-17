<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar225106365;

use App\Models\TestCar225106365;
use App\Models\TestCar2279493822;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar225106365 $testCar225106365;

                        
    public function mount(TestCar225106365 $testCar225106365)
    {
        $this->testCar225106365 = $testCar225106365;
                                }

    public function render()
    {
        return view('livewire.generated.test-car225106365.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar225106365->save();

        return redirect()->route('laragen.admin.test_car225106365s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar225106365.test' => [
                                                                                ],
                                                                    'testCar225106365.daphne_ankunding_id' => [
                                                                                ],
                    ];
    }
}
