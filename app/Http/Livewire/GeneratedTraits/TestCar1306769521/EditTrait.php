<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1306769521;

use App\Models\TestCar1306769521;
                use App\Models\TestCar2826983129;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar2826983129s;
            
    public TestCar1306769521 $testCar1306769521;

    public function mount(TestCar1306769521 $testCar1306769521)
    {
        $this->testCar1306769521 = $testCar1306769521;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1306769521->save();

        return redirect()->route('laragentest_car1306769521s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1306769521.test' => [
                                                                                                                ],
                                                'testCar1306769521.brisa_bednar_id' => [
                                                                                                                ],
                    ];
    }
}
