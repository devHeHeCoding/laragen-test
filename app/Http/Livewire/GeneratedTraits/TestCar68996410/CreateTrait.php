<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar68996410;

use App\Models\TestCar68996410;
use App\Models\TestCar21309452577;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar68996410 $testCar68996410;

                        
    public function mount(TestCar68996410 $testCar68996410)
    {
        $this->testCar68996410 = $testCar68996410;
                                }

    public function render()
    {
        return view('livewire.generated.test-car68996410.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar68996410->save();

        return redirect()->route('laragen.admin.test_car68996410s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar68996410.test' => [
                                                                                ],
                                                                    'testCar68996410.delores_kertzmann_id' => [
                                                                                ],
                    ];
    }
}
