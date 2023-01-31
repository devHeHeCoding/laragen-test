<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2012776875;

use App\Models\TestCar2012776875;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar2012776875 $testCar2012776875;

                        
    public function mount(TestCar2012776875 $testCar2012776875)
    {
        $this->testCar2012776875 = $testCar2012776875;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar2012776875->save();

        return redirect()->route('laragen.admin.test_car2012776875s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2012776875.test' => [
                                                                                                                ],
                    ];
    }
}
