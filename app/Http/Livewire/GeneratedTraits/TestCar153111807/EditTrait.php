<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar153111807;

use App\Models\TestCar153111807;
                use App\Models\TestCar21729063810;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar153111807 $testCar153111807;

                                            
    public function mount(TestCar153111807 $testCar153111807)
    {
        $this->testCar153111807 = $testCar153111807;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar153111807->save();

        return redirect()->route('laragen.admin.test_car153111807s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar153111807.test' => [
                                                                                                                ],
                                                'testCar153111807.myriam_powlowski_id' => [
                                                                                                                ],
                    ];
    }
}
