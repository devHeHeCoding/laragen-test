<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1844893232;

use App\Models\TestCar1844893232;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1844893232 $testCar1844893232;

    
    public function mount(TestCar1844893232 $testCar1844893232)
    {
        $this->testCar1844893232 = $testCar1844893232;
            }

    public function render()
    {
        return view('livewire.generated.test-car1844893232.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1844893232->save();

        return redirect()->route('laragen.admin.test_car1844893232s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1844893232.test' => [
                                                                                ],
                    ];
    }
}
