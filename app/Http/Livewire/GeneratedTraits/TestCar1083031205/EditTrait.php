<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1083031205;

use App\Models\TestCar1083031205;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1083031205 $testCar1083031205;

                        
    public function mount(TestCar1083031205 $testCar1083031205)
    {
        $this->testCar1083031205 = $testCar1083031205;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1083031205->save();

        return redirect()->route('laragen.admin.test_car1083031205s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1083031205.test' => [
                                                                                                                ],
                    ];
    }
}
