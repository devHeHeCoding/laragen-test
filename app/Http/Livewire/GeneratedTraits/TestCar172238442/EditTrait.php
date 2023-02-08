<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar172238442;

use App\Models\TestCar172238442;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar172238442 $testCar172238442;

                        
    public function mount(TestCar172238442 $testCar172238442)
    {
        $this->testCar172238442 = $testCar172238442;
                                }

    public function render()
    {
        return view('livewire.generated.test-car172238442.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar172238442->save();

        return redirect()->route('laragen.admin.test_car172238442s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar172238442.test' => [
                                                                                                                ],
                    ];
    }
}
