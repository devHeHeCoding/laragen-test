<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar762059127;

use App\Models\TestCar762059127;
                use App\Models\TestCar21546822451;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar21546822451s;
            
    public TestCar762059127 $testCar762059127;

    public function mount(TestCar762059127 $testCar762059127)
    {
        $this->testCar762059127 = $testCar762059127;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar762059127->save();

        return redirect()->route('laragentestCar762059127s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar762059127.test' => [
                                                                                                                ],
                                                'testCar762059127.kayla_bernier_id' => [
                                                                                                                ],
                    ];
    }
}
