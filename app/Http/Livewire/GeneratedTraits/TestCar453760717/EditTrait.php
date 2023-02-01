<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar453760717;

use App\Models\TestCar453760717;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar453760717 $testCar453760717;

                        
    public function mount(TestCar453760717 $testCar453760717)
    {
        $this->testCar453760717 = $testCar453760717;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar453760717->save();

        return redirect()->route('laragen.admin.test_car453760717s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar453760717.test' => [
                                                                                                                ],
                    ];
    }
}
