<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1217718184;

use App\Models\TestCar1217718184;
                use App\Models\TestCar2990028172;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar2990028172s;
            
    public TestCar1217718184 $testCar1217718184;

    public function mount(TestCar1217718184 $testCar1217718184)
    {
        $this->testCar1217718184 = $testCar1217718184;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1217718184->save();

        return redirect()->route('laragentest_car1217718184s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1217718184.test' => [
                                                                                                                ],
                                                'testCar1217718184.jaunita_lindgren_id' => [
                                                                                                                ],
                    ];
    }
}
