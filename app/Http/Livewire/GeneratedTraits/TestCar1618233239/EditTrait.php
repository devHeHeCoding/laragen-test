<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1618233239;

use App\Models\TestCar1618233239;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1618233239 $testCar1618233239;

                        
    public function mount(TestCar1618233239 $testCar1618233239)
    {
        $this->testCar1618233239 = $testCar1618233239;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1618233239->save();

        return redirect()->route('laragen.admin.test_car1618233239s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1618233239.test' => [
                                                                                                                ],
                    ];
    }
}
