<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar646393988;

use App\Models\TestCar646393988;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar646393988 $testCar646393988;

    
    public function mount(TestCar646393988 $testCar646393988)
    {
        $this->testCar646393988 = $testCar646393988;
            }

    public function render()
    {
        return view('livewire.generated.test-car646393988.edit');
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
                                                                                ],
                    ];
    }
}
