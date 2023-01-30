<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar281965965;

use App\Models\TestCar281965965;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar281965965 $testCar281965965;

                        
    public function mount(TestCar281965965 $testCar281965965)
    {
        $this->testCar281965965 = $testCar281965965;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar281965965->save();

        return redirect()->route('laragen.admin.test_car281965965s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar281965965.test' => [
                                                                                                                ],
                    ];
    }
}
