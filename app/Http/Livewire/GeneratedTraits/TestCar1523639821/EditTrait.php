<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1523639821;

use App\Models\TestCar1523639821;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1523639821 $testCar1523639821;

                        
    public function mount(TestCar1523639821 $testCar1523639821)
    {
        $this->testCar1523639821 = $testCar1523639821;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1523639821->save();

        return redirect()->route('laragen.admin.test_car1523639821s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1523639821.test' => [
                                                                                                                ],
                    ];
    }
}
