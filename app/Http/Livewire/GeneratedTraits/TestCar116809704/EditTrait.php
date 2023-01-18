<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar116809704;

use App\Models\TestCar116809704;
                use App\Models\TestCar22021992826;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar22021992826s;
            
    public TestCar116809704 $testCar116809704;

    public function mount(TestCar116809704 $testCar116809704)
    {
        $this->testCar116809704 = $testCar116809704;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar116809704->save();

        return redirect()->route('laragentest_car116809704s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar116809704.test' => [
                                                                                                                ],
                                                'testCar116809704.dr._glen_larkin_id' => [
                                                                                                                ],
                    ];
    }
}
