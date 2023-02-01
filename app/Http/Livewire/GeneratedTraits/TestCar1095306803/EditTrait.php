<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1095306803;

use App\Models\TestCar1095306803;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1095306803 $testCar1095306803;

                        
    public function mount(TestCar1095306803 $testCar1095306803)
    {
        $this->testCar1095306803 = $testCar1095306803;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1095306803->save();

        return redirect()->route('laragen.admin.test_car1095306803s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1095306803.test' => [
                                                                                                                ],
                    ];
    }
}
