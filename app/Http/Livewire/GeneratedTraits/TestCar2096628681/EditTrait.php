<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2096628681;

use App\Models\TestCar2096628681;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar2096628681 $testCar2096628681;

                        
    public function mount(TestCar2096628681 $testCar2096628681)
    {
        $this->testCar2096628681 = $testCar2096628681;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar2096628681->save();

        return redirect()->route('laragen.admin.test_car2096628681s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar2096628681.test' => [
                                                                                                                ],
                    ];
    }
}
