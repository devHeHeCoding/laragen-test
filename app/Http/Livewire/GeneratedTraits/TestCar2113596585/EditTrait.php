<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2113596585;

use App\Models\TestCar2113596585;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar2113596585 $testCar2113596585;

                        
    public function mount(TestCar2113596585 $testCar2113596585)
    {
        $this->testCar2113596585 = $testCar2113596585;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar2113596585->save();

        return redirect()->route('laragen.admin.test_car2113596585s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar2113596585.test' => [
                                                                                                                ],
                    ];
    }
}
