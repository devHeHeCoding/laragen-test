<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar592950477;

use App\Models\TestCar592950477;
use App\Models\TestCar21336798997;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar592950477 $testCar592950477;

                        
    public function mount(TestCar592950477 $testCar592950477)
    {
        $this->testCar592950477 = $testCar592950477;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car592950477.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar592950477->save();

        return redirect()->route('laragen.admin.test_car592950477s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar592950477.test' => [
                                                                                ],
                                                                    'testCar592950477.mrs._earlene_leannon_id' => [
                                                                                ],
                    ];
    }
}
