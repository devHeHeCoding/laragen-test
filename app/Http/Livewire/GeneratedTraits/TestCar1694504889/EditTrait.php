<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1694504889;

use App\Models\TestCar1694504889;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1694504889 $testCar1694504889;

                        
    public function mount(TestCar1694504889 $testCar1694504889)
    {
        $this->testCar1694504889 = $testCar1694504889;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1694504889->save();

        return redirect()->route('laragen.admin.test_car1694504889s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1694504889.test' => [
                                                                                                                ],
                    ];
    }
}
