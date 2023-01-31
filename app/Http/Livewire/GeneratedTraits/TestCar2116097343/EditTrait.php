<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2116097343;

use App\Models\TestCar2116097343;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar2116097343 $testCar2116097343;

                        
    public function mount(TestCar2116097343 $testCar2116097343)
    {
        $this->testCar2116097343 = $testCar2116097343;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar2116097343->save();

        return redirect()->route('laragen.admin.test_car2116097343s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2116097343.test' => [
                                                                                                                ],
                    ];
    }
}
