<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar533183347;

use App\Models\TestCar533183347;
use App\Models\TestCar2372997582;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar533183347 $testCar533183347;

                        
    public function mount(TestCar533183347 $testCar533183347)
    {
        $this->testCar533183347 = $testCar533183347;
                                }

    public function render()
    {
        return view('livewire.generated.test-car533183347.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar533183347->save();

        return redirect()->route('laragen.admin.test_car533183347s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar533183347.test' => [
                                                                                ],
                                                                    'testCar533183347.margot_stark_id' => [
                                                                                ],
                    ];
    }
}
