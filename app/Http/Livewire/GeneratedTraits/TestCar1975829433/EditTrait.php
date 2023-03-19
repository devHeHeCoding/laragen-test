<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1975829433;

use App\Models\TestCar1975829433;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1975829433 $testCar1975829433;

    
    public function mount(TestCar1975829433 $testCar1975829433)
    {
        $this->testCar1975829433 = $testCar1975829433;
            }

    public function render()
    {
        return view('livewire.generated.test-car1975829433.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1975829433->save();

        return redirect()->route('laragen.admin.test_car1975829433s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1975829433.test' => [
                                                                                ],
                    ];
    }
}
