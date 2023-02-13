<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1457791476;

use App\Models\TestCar1457791476;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1457791476 $testCar1457791476;

                        
    public function mount(TestCar1457791476 $testCar1457791476)
    {
        $this->testCar1457791476 = $testCar1457791476;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1457791476.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1457791476->save();

        return redirect()->route('laragen.admin.test_car1457791476s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1457791476.test' => [
                                                                                                                ],
                    ];
    }
}
