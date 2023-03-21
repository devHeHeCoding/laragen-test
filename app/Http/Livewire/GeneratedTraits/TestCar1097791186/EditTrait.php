<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1097791186;

use App\Models\TestCar1097791186;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1097791186 $testCar1097791186;

    
    public function mount(TestCar1097791186 $testCar1097791186)
    {
        $this->testCar1097791186 = $testCar1097791186;
            }

    public function render()
    {
        return view('livewire.generated.test-car1097791186.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1097791186->save();

        return redirect()->route('laragen.admin.test_car1097791186s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1097791186.test' => [
                                                                                ],
                    ];
    }
}
