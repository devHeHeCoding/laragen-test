<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1572913987;

use App\Models\TestCar1572913987;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1572913987 $testCar1572913987;

                        
    public function mount(TestCar1572913987 $testCar1572913987)
    {
        $this->testCar1572913987 = $testCar1572913987;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1572913987->save();

        return redirect()->route('laragen.admin.test_car1572913987s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1572913987.test' => [
                                                                                                                ],
                    ];
    }
}
