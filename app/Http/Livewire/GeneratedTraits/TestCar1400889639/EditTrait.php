<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1400889639;

use App\Models\TestCar1400889639;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1400889639 $testCar1400889639;

                        
    public function mount(TestCar1400889639 $testCar1400889639)
    {
        $this->testCar1400889639 = $testCar1400889639;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1400889639.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1400889639->save();

        return redirect()->route('laragen.admin.test_car1400889639s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1400889639.test' => [
                                                                                ],
                    ];
    }
}
