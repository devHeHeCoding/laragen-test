<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1363987257;

use App\Models\TestCar1363987257;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1363987257 $testCar1363987257;

                        
    public function mount(TestCar1363987257 $testCar1363987257)
    {
        $this->testCar1363987257 = $testCar1363987257;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1363987257.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1363987257->save();

        return redirect()->route('laragen.admin.test_car1363987257s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1363987257.test' => [
                                                                                                                ],
                    ];
    }
}
