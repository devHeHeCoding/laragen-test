<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar321241581;

use App\Models\TestCar321241581;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar321241581 $testCar321241581;

                        
    public function mount(TestCar321241581 $testCar321241581)
    {
        $this->testCar321241581 = $testCar321241581;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar321241581->save();

        return redirect()->route('laragen.admin.test_car321241581s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar321241581.test' => [
                                                                                                                ],
                    ];
    }
}
