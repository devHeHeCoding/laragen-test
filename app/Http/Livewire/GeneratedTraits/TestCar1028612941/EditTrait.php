<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1028612941;

use App\Models\TestCar1028612941;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1028612941 $testCar1028612941;

                        
    public function mount(TestCar1028612941 $testCar1028612941)
    {
        $this->testCar1028612941 = $testCar1028612941;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1028612941->save();

        return redirect()->route('laragen.admin.test_car1028612941s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1028612941.test' => [
                                                                                                                ],
                    ];
    }
}
