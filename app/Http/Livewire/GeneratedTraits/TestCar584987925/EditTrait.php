<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar584987925;

use App\Models\TestCar584987925;
                use App\Models\TestCar21866010714;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar584987925 $testCar584987925;

    public function mount(TestCar584987925 $testCar584987925)
    {
        $this->testCar584987925 = $testCar584987925;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar584987925->save();

        return redirect()->route('admin.testCar584987925.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar584987925.test' => [
                                                                                                                ],
                                                'testCar584987925.tyrel_lang_id' => [
                                                                                                                ],
                    ];
    }
}
