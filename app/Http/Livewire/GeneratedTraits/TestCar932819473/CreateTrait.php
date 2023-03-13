<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar932819473;

use App\Models\TestCar932819473;
use App\Models\TestCar21635389240;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar932819473 $testCar932819473;

                        
    public function mount(TestCar932819473 $testCar932819473)
    {
        $this->testCar932819473 = $testCar932819473;
                                }

    public function render()
    {
        return view('livewire.generated.test-car932819473.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar932819473->save();

        return redirect()->route('laragen.admin.test_car932819473s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar932819473.test' => [
                                                                                ],
                                                                    'testCar932819473.dr._shirley_satterfield_d_d_s_id' => [
                                                                                ],
                    ];
    }
}
