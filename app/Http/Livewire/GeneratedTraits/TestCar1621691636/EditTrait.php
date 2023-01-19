<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1621691636;

use App\Models\TestCar1621691636;
                use App\Models\TestCar2503743185;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar2503743185s;
            
    public TestCar1621691636 $testCar1621691636;

    public function mount(TestCar1621691636 $testCar1621691636)
    {
        $this->testCar1621691636 = $testCar1621691636;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1621691636->save();

        return redirect()->route('laragen.admin.test_car1621691636s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1621691636.test' => [
                                                                                                                ],
                                                'testCar1621691636.dereck_hansen_id' => [
                                                                                                                ],
                    ];
    }
}
