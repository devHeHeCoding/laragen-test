<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1868284024;

use App\Models\TestCar1868284024;
                use App\Models\TestCar21399654296;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1868284024 $testCar1868284024;

                                            
    public function mount(TestCar1868284024 $testCar1868284024)
    {
        $this->testCar1868284024 = $testCar1868284024;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1868284024->save();

        return redirect()->route('laragen.admin.test_car1868284024s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1868284024.test' => [
                                                                                                                ],
                                                'testCar1868284024.aiyana_gleason_id' => [
                                                                                                                ],
                    ];
    }
}
