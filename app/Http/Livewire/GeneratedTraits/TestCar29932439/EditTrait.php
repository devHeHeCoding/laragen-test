<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar29932439;

use App\Models\TestCar29932439;
                use App\Models\TestCar2575703340;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                            
    public TestCar29932439 $testCar29932439;

    public function mount(TestCar29932439 $testCar29932439)
    {
        $this->testCar29932439 = $testCar29932439;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar29932439->save();

        return redirect()->route('laragen.admin.test_car29932439s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar29932439.test' => [
                                                                                                                ],
                                                'testCar29932439.mr._laverne_hermann_id' => [
                                                                                                                ],
                    ];
    }
}
