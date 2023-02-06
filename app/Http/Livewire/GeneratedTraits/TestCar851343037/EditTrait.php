<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar851343037;

use App\Models\TestCar851343037;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar851343037 $testCar851343037;

                        
    public function mount(TestCar851343037 $testCar851343037)
    {
        $this->testCar851343037 = $testCar851343037;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar851343037->save();

        return redirect()->route('laragen.admin.test_car851343037s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar851343037.test' => [
                                                                                                                ],
                    ];
    }
}
