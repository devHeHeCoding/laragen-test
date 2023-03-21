<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2085255194;

use App\Models\TestCar2085255194;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar2085255194 $testCar2085255194;

    
    public function mount(TestCar2085255194 $testCar2085255194)
    {
        $this->testCar2085255194 = $testCar2085255194;
            }

    public function render()
    {
        return view('livewire.generated.test-car2085255194.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar2085255194->save();

        return redirect()->route('laragen.admin.test_car2085255194s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2085255194.test' => [
                                                                                ],
                    ];
    }
}
