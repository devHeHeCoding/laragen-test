<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar861605239;

use App\Models\TestCar861605239;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar861605239 $testCar861605239;

                        
    public function mount(TestCar861605239 $testCar861605239)
    {
        $this->testCar861605239 = $testCar861605239;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar861605239->save();

        return redirect()->route('laragen.admin.test_car861605239s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar861605239.test' => [
                                                                                                                ],
                    ];
    }
}
