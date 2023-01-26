<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1006792630;

use App\Models\TestCar1006792630;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1006792630 $testCar1006792630;

                        
    public function mount(TestCar1006792630 $testCar1006792630)
    {
        $this->testCar1006792630 = $testCar1006792630;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1006792630->save();

        return redirect()->route('laragen.admin.test_car1006792630s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1006792630.test' => [
                                                                                                                ],
                    ];
    }
}
