<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar607009969;

use App\Models\TestCar607009969;
                use App\Models\TestCar2484761965;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar2484761965s;
            
    public TestCar607009969 $testCar607009969;

    public function mount(TestCar607009969 $testCar607009969)
    {
        $this->testCar607009969 = $testCar607009969;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar607009969->save();

        return redirect()->route('laragentestCar607009969s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar607009969.test' => [
                                                                                                                ],
                                                'testCar607009969.tremayne_aufderhar_id' => [
                                                                                                                ],
                    ];
    }
}
