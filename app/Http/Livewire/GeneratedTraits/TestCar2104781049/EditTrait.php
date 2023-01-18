<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2104781049;

use App\Models\TestCar2104781049;
                use App\Models\TestCar2959438722;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar2959438722s;
            
    public TestCar2104781049 $testCar2104781049;

    public function mount(TestCar2104781049 $testCar2104781049)
    {
        $this->testCar2104781049 = $testCar2104781049;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar2104781049->save();

        return redirect()->route('laragentest_car2104781049s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar2104781049.test' => [
                                                                                                                ],
                                                'testCar2104781049.jenifer_price_v_id' => [
                                                                                                                ],
                    ];
    }
}
