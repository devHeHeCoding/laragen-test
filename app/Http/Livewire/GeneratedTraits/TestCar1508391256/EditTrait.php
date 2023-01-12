<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1508391256;

use App\Models\TestCar1508391256;
                use App\Models\TestCar21552682519;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1508391256 $testCar1508391256;

    public function mount(TestCar1508391256 $testCar1508391256)
    {
        $this->testCar1508391256 = $testCar1508391256;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1508391256->save();

        return redirect()->route('admin.testCar1508391256.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1508391256.test' => [
                                                                                                                ],
                                                'testCar1508391256.rae_kovacek_m_d_id' => [
                                                                                                                ],
                    ];
    }
}
