<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar776051337;

use App\Models\TestCar776051337;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar776051337 $testCar776051337;

                        
    public function mount(TestCar776051337 $testCar776051337)
    {
        $this->testCar776051337 = $testCar776051337;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar776051337->save();

        return redirect()->route('laragen.admin.test_car776051337s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar776051337.test' => [
                                                                                                                ],
                    ];
    }
}
