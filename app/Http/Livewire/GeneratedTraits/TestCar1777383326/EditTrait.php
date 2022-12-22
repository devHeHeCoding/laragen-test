<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1777383326;

use App\Models\TestCar1777383326;
                use App\Models\TestCar21158215683;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1777383326 $testCar1777383326;

    public function mount(TestCar1777383326 $testCar1777383326)
    {
        $this->testCar1777383326 = $testCar1777383326;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1777383326->save();

        return redirect()->route('admin.testCar1777383326.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1777383326.test' => [
                                                                                                                ],
                                                'testCar1777383326.haleigh_rempel_i_i_i_id' => [
                                                                                                                ],
                    ];
    }
}
