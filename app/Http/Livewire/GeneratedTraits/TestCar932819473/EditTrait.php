<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar932819473;

use App\Models\TestCar932819473;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar932819473 $testCar932819473;

    
    public function mount(TestCar932819473 $testCar932819473)
    {
        $this->testCar932819473 = $testCar932819473;
            }

    public function render()
    {
        return view('livewire.generated.test-car932819473.edit');
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
                    ];
    }
}
