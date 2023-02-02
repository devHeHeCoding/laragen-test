<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1629897200;

use App\Models\TestCar1629897200;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1629897200 $testCar1629897200;

                        
    public function mount(TestCar1629897200 $testCar1629897200)
    {
        $this->testCar1629897200 = $testCar1629897200;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1629897200->save();

        return redirect()->route('laragen.admin.test_car1629897200s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1629897200.test' => [
                                                                                                                ],
                    ];
    }
}
