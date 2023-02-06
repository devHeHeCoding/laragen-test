<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1346775555;

use App\Models\TestCar1346775555;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1346775555 $testCar1346775555;

                        
    public function mount(TestCar1346775555 $testCar1346775555)
    {
        $this->testCar1346775555 = $testCar1346775555;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1346775555->save();

        return redirect()->route('laragen.admin.test_car1346775555s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1346775555.test' => [
                                                                                                                ],
                    ];
    }
}
