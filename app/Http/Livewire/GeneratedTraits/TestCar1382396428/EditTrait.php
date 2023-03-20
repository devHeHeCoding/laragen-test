<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1382396428;

use App\Models\TestCar1382396428;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1382396428 $testCar1382396428;

    
    public function mount(TestCar1382396428 $testCar1382396428)
    {
        $this->testCar1382396428 = $testCar1382396428;
            }

    public function render()
    {
        return view('livewire.generated.test-car1382396428.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1382396428->save();

        return redirect()->route('laragen.admin.test_car1382396428s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1382396428.test' => [
                                                                                ],
                    ];
    }
}
