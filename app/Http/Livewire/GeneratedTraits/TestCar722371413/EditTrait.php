<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar722371413;

use App\Models\TestCar722371413;
                use App\Models\TestCar21761523396;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar21761523396s;
            
    public TestCar722371413 $testCar722371413;

    public function mount(TestCar722371413 $testCar722371413)
    {
        $this->testCar722371413 = $testCar722371413;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar722371413->save();

        return redirect()->route('laragentest_car722371413s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar722371413.test' => [
                                                                                                                ],
                                                'testCar722371413.alaina_carter_id' => [
                                                                                                                ],
                    ];
    }
}
