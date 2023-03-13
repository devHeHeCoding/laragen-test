<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1936681020;

use App\Models\TestCar1936681020;
use App\Models\TestCar21209726329;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1936681020 $testCar1936681020;

                        
    public function mount(TestCar1936681020 $testCar1936681020)
    {
        $this->testCar1936681020 = $testCar1936681020;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1936681020.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1936681020->save();

        return redirect()->route('laragen.admin.test_car1936681020s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1936681020.test' => [
                                                                                ],
                                                                    'testCar1936681020.blanche_dach_d_v_m_id' => [
                                                                                ],
                    ];
    }
}
