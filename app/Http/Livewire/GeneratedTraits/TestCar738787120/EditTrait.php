<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar738787120;

use App\Models\TestCar738787120;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar738787120 $testCar738787120;

                        
    public function mount(TestCar738787120 $testCar738787120)
    {
        $this->testCar738787120 = $testCar738787120;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar738787120->save();

        return redirect()->route('laragen.admin.test_car738787120s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar738787120.test' => [
                                                                                                                ],
                    ];
    }
}
