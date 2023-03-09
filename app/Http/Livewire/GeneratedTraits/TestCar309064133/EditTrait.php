<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar309064133;

use App\Models\TestCar309064133;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar309064133 $testCar309064133;

                        
    public function mount(TestCar309064133 $testCar309064133)
    {
        $this->testCar309064133 = $testCar309064133;
                                }

    public function render()
    {
        return view('livewire.generated.test-car309064133.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar309064133->save();

        return redirect()->route('laragen.admin.test_car309064133s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar309064133.test' => [
                                                                                ],
                    ];
    }
}
