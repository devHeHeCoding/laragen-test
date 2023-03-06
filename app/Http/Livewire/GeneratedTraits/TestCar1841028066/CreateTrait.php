<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1841028066;

use App\Models\TestCar1841028066;
            use App\Models\TestCar275641337;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1841028066 $testCar1841028066;

                                            
    public function mount(TestCar1841028066 $testCar1841028066)
    {
        $this->testCar1841028066 = $testCar1841028066;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1841028066.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1841028066->save();

        return redirect()->route('laragen.admin.test_car1841028066s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1841028066.test' => [
                                                                                ],
                                                                    'testCar1841028066.reynold_stark_id' => [
                                                                                ],
                    ];
    }
}
