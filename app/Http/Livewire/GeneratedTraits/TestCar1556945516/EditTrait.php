<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1556945516;

use App\Models\TestCar1556945516;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1556945516 $testCar1556945516;

    
    public function mount(TestCar1556945516 $testCar1556945516)
    {
        $this->testCar1556945516 = $testCar1556945516;
            }

    public function render()
    {
        return view('livewire.generated.test-car1556945516.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1556945516->save();

        return redirect()->route('laragen.admin.test_car1556945516s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1556945516.test' => [
                                                                                ],
                    ];
    }
}
