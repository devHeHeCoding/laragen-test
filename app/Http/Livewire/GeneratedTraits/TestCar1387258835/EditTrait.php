<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1387258835;

use App\Models\TestCar1387258835;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1387258835 $testCar1387258835;

                        
    public function mount(TestCar1387258835 $testCar1387258835)
    {
        $this->testCar1387258835 = $testCar1387258835;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1387258835->save();

        return redirect()->route('laragen.admin.test_car1387258835s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1387258835.test' => [
                                                                                                                ],
                    ];
    }
}
