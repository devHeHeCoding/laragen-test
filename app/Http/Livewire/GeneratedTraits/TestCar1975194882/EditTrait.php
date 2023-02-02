<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1975194882;

use App\Models\TestCar1975194882;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1975194882 $testCar1975194882;

                        
    public function mount(TestCar1975194882 $testCar1975194882)
    {
        $this->testCar1975194882 = $testCar1975194882;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1975194882->save();

        return redirect()->route('laragen.admin.test_car1975194882s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1975194882.test' => [
                                                                                                                ],
                    ];
    }
}
