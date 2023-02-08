<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar319591901;

use App\Models\TestCar319591901;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar319591901 $testCar319591901;

                        
    public function mount(TestCar319591901 $testCar319591901)
    {
        $this->testCar319591901 = $testCar319591901;
                                }

    public function render()
    {
        return view('livewire.generated.test-car319591901.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar319591901->save();

        return redirect()->route('laragen.admin.test_car319591901s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar319591901.test' => [
                                                                                                                ],
                    ];
    }
}
