<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1198457234;

use App\Models\TestCar1198457234;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1198457234 $testCar1198457234;

    
    public function mount(TestCar1198457234 $testCar1198457234)
    {
        $this->testCar1198457234 = $testCar1198457234;
            }

    public function render()
    {
        return view('livewire.generated.test-car1198457234.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1198457234->save();

        return redirect()->route('laragen.admin.test_car1198457234s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1198457234.test' => [
                                                                                ],
                    ];
    }
}
