<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar243053359;

use App\Models\TestCar243053359;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar243053359 $testCar243053359;

                        
    public function mount(TestCar243053359 $testCar243053359)
    {
        $this->testCar243053359 = $testCar243053359;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar243053359->save();

        return redirect()->route('laragen.admin.test_car243053359s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar243053359.test' => [
                                                                                                                ],
                    ];
    }
}
