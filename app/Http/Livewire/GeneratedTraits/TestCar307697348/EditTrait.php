<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar307697348;

use App\Models\TestCar307697348;
                use App\Models\TestCar21672295948;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar21672295948s;
            
    public TestCar307697348 $testCar307697348;

    public function mount(TestCar307697348 $testCar307697348)
    {
        $this->testCar307697348 = $testCar307697348;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar307697348->save();

        return redirect()->route('laragentestCar307697348.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar307697348.test' => [
                                                                                                                ],
                                                'testCar307697348.blaze_olson_id' => [
                                                                                                                ],
                    ];
    }
}
