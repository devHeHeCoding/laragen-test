<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar660723101;

use App\Models\TestCar660723101;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar660723101 $testCar660723101;

                        
    public function mount(TestCar660723101 $testCar660723101)
    {
        $this->testCar660723101 = $testCar660723101;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar660723101->save();

        return redirect()->route('laragen.admin.test_car660723101s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar660723101.test' => [
                                                                                                                ],
                    ];
    }
}
