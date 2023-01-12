<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar250149536;

use App\Models\TestCar250149536;
                use App\Models\TestCar21011368603;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar250149536 $testCar250149536;

    public function mount(TestCar250149536 $testCar250149536)
    {
        $this->testCar250149536 = $testCar250149536;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar250149536->save();

        return redirect()->route('admin.testCar250149536.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar250149536.test' => [
                                                                                                                ],
                                                'testCar250149536.dr._murphy_dickens_m_d_id' => [
                                                                                                                ],
                    ];
    }
}
