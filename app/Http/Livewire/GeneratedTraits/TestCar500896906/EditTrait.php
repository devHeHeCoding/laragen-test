<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar500896906;

use App\Models\TestCar500896906;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar500896906 $testCar500896906;

                        
    public function mount(TestCar500896906 $testCar500896906)
    {
        $this->testCar500896906 = $testCar500896906;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar500896906->save();

        return redirect()->route('laragen.admin.test_car500896906s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar500896906.test' => [
                                                                                                                ],
                    ];
    }
}
