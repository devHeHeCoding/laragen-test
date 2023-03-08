<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar99630450;

use App\Models\TestCar99630450;
            use App\Models\TestCar2693648679;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar99630450 $testCar99630450;

                                            
    public function mount(TestCar99630450 $testCar99630450)
    {
        $this->testCar99630450 = $testCar99630450;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car99630450.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar99630450->save();

        return redirect()->route('laragen.admin.test_car99630450s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar99630450.test' => [
                                                                                ],
                                                                    'testCar99630450.tyree_hand_d_v_m_id' => [
                                                                                ],
                    ];
    }
}
