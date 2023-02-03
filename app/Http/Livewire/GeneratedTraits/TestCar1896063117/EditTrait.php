<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1896063117;

use App\Models\TestCar1896063117;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1896063117 $testCar1896063117;

                        
    public function mount(TestCar1896063117 $testCar1896063117)
    {
        $this->testCar1896063117 = $testCar1896063117;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1896063117->save();

        return redirect()->route('laragen.admin.test_car1896063117s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1896063117.test' => [
                                                                                                                ],
                    ];
    }
}
