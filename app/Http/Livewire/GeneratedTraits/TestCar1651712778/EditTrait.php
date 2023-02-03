<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1651712778;

use App\Models\TestCar1651712778;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1651712778 $testCar1651712778;

                        
    public function mount(TestCar1651712778 $testCar1651712778)
    {
        $this->testCar1651712778 = $testCar1651712778;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1651712778->save();

        return redirect()->route('laragen.admin.test_car1651712778s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1651712778.test' => [
                                                                                                                ],
                    ];
    }
}
