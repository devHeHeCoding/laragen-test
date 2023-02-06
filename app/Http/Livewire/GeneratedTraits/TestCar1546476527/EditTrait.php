<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1546476527;

use App\Models\TestCar1546476527;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1546476527 $testCar1546476527;

                        
    public function mount(TestCar1546476527 $testCar1546476527)
    {
        $this->testCar1546476527 = $testCar1546476527;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1546476527->save();

        return redirect()->route('laragen.admin.test_car1546476527s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1546476527.test' => [
                                                                                                                ],
                    ];
    }
}
