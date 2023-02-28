<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1477719599;

use App\Models\TestCar1477719599;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1477719599 $testCar1477719599;

                        
    public function mount(TestCar1477719599 $testCar1477719599)
    {
        $this->testCar1477719599 = $testCar1477719599;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1477719599.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1477719599->save();

        return redirect()->route('laragen.admin.test_car1477719599s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1477719599.test' => [
                                                                                                                ],
                    ];
    }
}
