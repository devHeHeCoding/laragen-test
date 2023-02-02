<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1498677870;

use App\Models\TestCar1498677870;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1498677870 $testCar1498677870;

                        
    public function mount(TestCar1498677870 $testCar1498677870)
    {
        $this->testCar1498677870 = $testCar1498677870;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1498677870->save();

        return redirect()->route('laragen.admin.test_car1498677870s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1498677870.test' => [
                                                                                                                ],
                    ];
    }
}
