<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1910293284;

use App\Models\TestCar1910293284;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1910293284 $testCar1910293284;

    
    public function mount(TestCar1910293284 $testCar1910293284)
    {
        $this->testCar1910293284 = $testCar1910293284;
            }

    public function render()
    {
        return view('livewire.generated.test-car1910293284.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1910293284->save();

        return redirect()->route('laragen.admin.test_car1910293284s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1910293284.test' => [
                                                                                ],
                    ];
    }
}
