<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar898297423;

use App\Models\TestCar898297423;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar898297423 $testCar898297423;

                        
    public function mount(TestCar898297423 $testCar898297423)
    {
        $this->testCar898297423 = $testCar898297423;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar898297423->save();

        return redirect()->route('laragen.admin.test_car898297423s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar898297423.test' => [
                                                                                                                ],
                    ];
    }
}
