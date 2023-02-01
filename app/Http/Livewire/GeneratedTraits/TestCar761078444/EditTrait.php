<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar761078444;

use App\Models\TestCar761078444;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar761078444 $testCar761078444;

                        
    public function mount(TestCar761078444 $testCar761078444)
    {
        $this->testCar761078444 = $testCar761078444;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar761078444->save();

        return redirect()->route('laragen.admin.test_car761078444s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar761078444.test' => [
                                                                                                                ],
                    ];
    }
}
