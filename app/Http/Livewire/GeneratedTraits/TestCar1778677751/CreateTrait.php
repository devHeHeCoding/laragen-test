<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1778677751;

use App\Models\TestCar1778677751;
use App\Models\TestCar21069521790;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1778677751 $testCar1778677751;

                        
    public function mount(TestCar1778677751 $testCar1778677751)
    {
        $this->testCar1778677751 = $testCar1778677751;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1778677751.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1778677751->save();

        return redirect()->route('laragen.admin.test_car1778677751s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1778677751.test' => [
                                                                                ],
                                                                    'testCar1778677751.brock_block_id' => [
                                                                                ],
                    ];
    }
}
