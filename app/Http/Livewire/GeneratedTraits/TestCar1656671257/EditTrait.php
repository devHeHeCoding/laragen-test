<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1656671257;

use App\Models\TestCar1656671257;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1656671257 $testCar1656671257;

    
    public function mount(TestCar1656671257 $testCar1656671257)
    {
        $this->testCar1656671257 = $testCar1656671257;
            }

    public function render()
    {
        return view('livewire.generated.test-car1656671257.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1656671257->save();

        return redirect()->route('laragen.admin.test_car1656671257s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1656671257.test' => [
                                                                                ],
                    ];
    }
}
