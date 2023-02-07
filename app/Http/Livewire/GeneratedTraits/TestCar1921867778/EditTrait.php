<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1921867778;

use App\Models\TestCar1921867778;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1921867778 $testCar1921867778;

                        
    public function mount(TestCar1921867778 $testCar1921867778)
    {
        $this->testCar1921867778 = $testCar1921867778;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1921867778->save();

        return redirect()->route('laragen.admin.test_car1921867778s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1921867778.test' => [
                                                                                                                ],
                    ];
    }
}
