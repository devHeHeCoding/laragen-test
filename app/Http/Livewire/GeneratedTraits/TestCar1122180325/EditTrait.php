<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1122180325;

use App\Models\TestCar1122180325;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1122180325 $testCar1122180325;

    
    public function mount(TestCar1122180325 $testCar1122180325)
    {
        $this->testCar1122180325 = $testCar1122180325;
            }

    public function render()
    {
        return view('livewire.generated.test-car1122180325.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1122180325->save();

        return redirect()->route('laragen.admin.test_car1122180325s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1122180325.test' => [
                                                                                ],
                    ];
    }
}
