<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2025907584;

use App\Models\TestCar2025907584;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar2025907584 $testCar2025907584;

                        
    public function mount(TestCar2025907584 $testCar2025907584)
    {
        $this->testCar2025907584 = $testCar2025907584;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar2025907584->save();

        return redirect()->route('laragen.admin.test_car2025907584s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2025907584.test' => [
                                                                                                                ],
                    ];
    }
}
