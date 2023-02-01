<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar266619430;

use App\Models\TestCar266619430;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar266619430 $testCar266619430;

                        
    public function mount(TestCar266619430 $testCar266619430)
    {
        $this->testCar266619430 = $testCar266619430;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar266619430->save();

        return redirect()->route('laragen.admin.test_car266619430s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar266619430.test' => [
                                                                                                                ],
                    ];
    }
}
