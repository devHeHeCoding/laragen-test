<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar617824993;

use App\Models\TestCar617824993;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar617824993 $testCar617824993;

                        
    public function mount(TestCar617824993 $testCar617824993)
    {
        $this->testCar617824993 = $testCar617824993;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar617824993->save();

        return redirect()->route('laragen.admin.test_car617824993s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar617824993.test' => [
                                                                                                                ],
                    ];
    }
}
