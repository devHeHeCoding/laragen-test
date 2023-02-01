<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1898839695;

use App\Models\TestCar1898839695;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1898839695 $testCar1898839695;

                        
    public function mount(TestCar1898839695 $testCar1898839695)
    {
        $this->testCar1898839695 = $testCar1898839695;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1898839695->save();

        return redirect()->route('laragen.admin.test_car1898839695s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1898839695.test' => [
                                                                                                                ],
                    ];
    }
}
