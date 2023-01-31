<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1230195362;

use App\Models\TestCar1230195362;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1230195362 $testCar1230195362;

                        
    public function mount(TestCar1230195362 $testCar1230195362)
    {
        $this->testCar1230195362 = $testCar1230195362;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1230195362->save();

        return redirect()->route('laragen.admin.test_car1230195362s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1230195362.test' => [
                                                                                                                ],
                    ];
    }
}
