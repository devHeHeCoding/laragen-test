<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar795180617;

use App\Models\TestCar795180617;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar795180617 $testCar795180617;

    
    public function mount(TestCar795180617 $testCar795180617)
    {
        $this->testCar795180617 = $testCar795180617;
            }

    public function render()
    {
        return view('livewire.generated.test-car795180617.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar795180617->save();

        return redirect()->route('laragen.admin.test_car795180617s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar795180617.test' => [
                                                                                ],
                    ];
    }
}
