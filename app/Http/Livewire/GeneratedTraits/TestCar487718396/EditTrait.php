<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar487718396;

use App\Models\TestCar487718396;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar487718396 $testCar487718396;

                        
    public function mount(TestCar487718396 $testCar487718396)
    {
        $this->testCar487718396 = $testCar487718396;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar487718396->save();

        return redirect()->route('laragen.admin.test_car487718396s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar487718396.test' => [
                                                                                                                ],
                    ];
    }
}
