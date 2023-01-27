<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1247988588;

use App\Models\TestCar1247988588;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1247988588 $testCar1247988588;

                        
    public function mount(TestCar1247988588 $testCar1247988588)
    {
        $this->testCar1247988588 = $testCar1247988588;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1247988588->save();

        return redirect()->route('laragen.admin.test_car1247988588s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1247988588.test' => [
                                                                                                                ],
                    ];
    }
}
