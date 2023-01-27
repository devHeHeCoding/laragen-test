<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar50840283;

use App\Models\TestCar50840283;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar50840283 $testCar50840283;

                        
    public function mount(TestCar50840283 $testCar50840283)
    {
        $this->testCar50840283 = $testCar50840283;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar50840283->save();

        return redirect()->route('laragen.admin.test_car50840283s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar50840283.test' => [
                                                                                                                ],
                    ];
    }
}
