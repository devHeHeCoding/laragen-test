<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1513758171;

use App\Models\TestCar1513758171;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1513758171 $testCar1513758171;

                        
    public function mount(TestCar1513758171 $testCar1513758171)
    {
        $this->testCar1513758171 = $testCar1513758171;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1513758171->save();

        return redirect()->route('laragen.admin.test_car1513758171s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1513758171.test' => [
                                                                                                                ],
                    ];
    }
}
