<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1602388900;

use App\Models\TestCar1602388900;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1602388900 $testCar1602388900;

                        
    public function mount(TestCar1602388900 $testCar1602388900)
    {
        $this->testCar1602388900 = $testCar1602388900;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1602388900->save();

        return redirect()->route('laragen.admin.test_car1602388900s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1602388900.test' => [
                                                                                                                ],
                    ];
    }
}
