<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar172364925;

use App\Models\TestCar172364925;
use App\Models\TestCar2587757052;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar172364925 $testCar172364925;

                        
    public function mount(TestCar172364925 $testCar172364925)
    {
        $this->testCar172364925 = $testCar172364925;
                                }

    public function render()
    {
        return view('livewire.generated.test-car172364925.create');
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
                                                                                    'required','string'
                                ],
                                                                    'testCar172364925.camila_bernhard_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
