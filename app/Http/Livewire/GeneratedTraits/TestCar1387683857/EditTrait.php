<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1387683857;

use App\Models\TestCar1387683857;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1387683857 $testCar1387683857;

    
    public function mount(TestCar1387683857 $testCar1387683857)
    {
        $this->testCar1387683857 = $testCar1387683857;
            }

    public function render()
    {
        return view('livewire.generated.test-car1387683857.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1387683857->save();

        return redirect()->route('laragen.admin.test_car1387683857s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1387683857.test' => [
                                                                                ],
                    ];
    }
}
