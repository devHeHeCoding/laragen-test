<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1243674150;

use App\Models\TestCar1243674150;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1243674150 $testCar1243674150;

    
    public function mount(TestCar1243674150 $testCar1243674150)
    {
        $this->testCar1243674150 = $testCar1243674150;
            }

    public function render()
    {
        return view('livewire.generated.test-car1243674150.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1243674150->save();

        return redirect()->route('laragen.admin.test_car1243674150s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1243674150.test' => [
                                                                                ],
                    ];
    }
}
