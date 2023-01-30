<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1471706017;

use App\Models\TestCar1471706017;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1471706017 $testCar1471706017;

                        
    public function mount(TestCar1471706017 $testCar1471706017)
    {
        $this->testCar1471706017 = $testCar1471706017;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1471706017->save();

        return redirect()->route('laragen.admin.test_car1471706017s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1471706017.test' => [
                                                                                                                ],
                    ];
    }
}
