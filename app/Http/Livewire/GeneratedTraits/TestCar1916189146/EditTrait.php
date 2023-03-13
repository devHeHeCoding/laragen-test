<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1916189146;

use App\Models\TestCar1916189146;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1916189146 $testCar1916189146;

    
    public function mount(TestCar1916189146 $testCar1916189146)
    {
        $this->testCar1916189146 = $testCar1916189146;
            }

    public function render()
    {
        return view('livewire.generated.test-car1916189146.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1916189146->save();

        return redirect()->route('laragen.admin.test_car1916189146s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1916189146.test' => [
                                                                                ],
                    ];
    }
}
