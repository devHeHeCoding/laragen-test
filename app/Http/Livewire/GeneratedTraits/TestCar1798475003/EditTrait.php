<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1798475003;

use App\Models\TestCar1798475003;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1798475003 $testCar1798475003;

                        
    public function mount(TestCar1798475003 $testCar1798475003)
    {
        $this->testCar1798475003 = $testCar1798475003;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1798475003->save();

        return redirect()->route('laragen.admin.test_car1798475003s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1798475003.test' => [
                                                                                                                ],
                    ];
    }
}
