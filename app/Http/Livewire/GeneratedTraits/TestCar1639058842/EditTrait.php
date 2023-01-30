<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1639058842;

use App\Models\TestCar1639058842;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1639058842 $testCar1639058842;

                        
    public function mount(TestCar1639058842 $testCar1639058842)
    {
        $this->testCar1639058842 = $testCar1639058842;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1639058842->save();

        return redirect()->route('laragen.admin.test_car1639058842s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1639058842.test' => [
                                                                                                                ],
                    ];
    }
}
