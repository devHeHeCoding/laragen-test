<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1331040511;

use App\Models\TestCar1331040511;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1331040511 $testCar1331040511;

    
    public function mount(TestCar1331040511 $testCar1331040511)
    {
        $this->testCar1331040511 = $testCar1331040511;
            }

    public function render()
    {
        return view('livewire.generated.test-car1331040511.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1331040511->save();

        return redirect()->route('laragen.admin.test_car1331040511s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1331040511.test' => [
                                                                                ],
                    ];
    }
}
