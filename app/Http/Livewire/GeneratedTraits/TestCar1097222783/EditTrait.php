<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1097222783;

use App\Models\TestCar1097222783;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1097222783 $testCar1097222783;

                        
    public function mount(TestCar1097222783 $testCar1097222783)
    {
        $this->testCar1097222783 = $testCar1097222783;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1097222783->save();

        return redirect()->route('laragen.admin.test_car1097222783s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1097222783.test' => [
                                                                                                                ],
                    ];
    }
}
