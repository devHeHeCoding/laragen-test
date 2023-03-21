<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar172364925;

use App\Models\TestCar172364925;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar172364925 $testCar172364925;

    
    public function mount(TestCar172364925 $testCar172364925)
    {
        $this->testCar172364925 = $testCar172364925;
            }

    public function render()
    {
        return view('livewire.generated.test-car172364925.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar172364925->save();

        return redirect()->route('laragen.admin.test_car172364925s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar172364925.test' => [
                                                                                ],
                    ];
    }
}
