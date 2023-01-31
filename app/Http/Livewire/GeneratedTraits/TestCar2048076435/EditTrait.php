<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2048076435;

use App\Models\TestCar2048076435;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar2048076435 $testCar2048076435;

                        
    public function mount(TestCar2048076435 $testCar2048076435)
    {
        $this->testCar2048076435 = $testCar2048076435;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar2048076435->save();

        return redirect()->route('laragen.admin.test_car2048076435s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2048076435.test' => [
                                                                                                                ],
                    ];
    }
}
