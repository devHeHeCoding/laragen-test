<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2114012326;

use App\Models\TestCar2114012326;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar2114012326 $testCar2114012326;

                        
    public function mount(TestCar2114012326 $testCar2114012326)
    {
        $this->testCar2114012326 = $testCar2114012326;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar2114012326->save();

        return redirect()->route('laragen.admin.test_car2114012326s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2114012326.test' => [
                                                                                                                ],
                    ];
    }
}
