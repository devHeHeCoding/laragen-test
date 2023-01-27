<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1407877259;

use App\Models\TestCar1407877259;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1407877259 $testCar1407877259;

                        
    public function mount(TestCar1407877259 $testCar1407877259)
    {
        $this->testCar1407877259 = $testCar1407877259;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1407877259->save();

        return redirect()->route('laragen.admin.test_car1407877259s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1407877259.test' => [
                                                                                                                ],
                    ];
    }
}
