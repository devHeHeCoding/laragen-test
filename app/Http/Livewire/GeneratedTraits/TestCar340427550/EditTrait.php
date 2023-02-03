<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar340427550;

use App\Models\TestCar340427550;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar340427550 $testCar340427550;

                        
    public function mount(TestCar340427550 $testCar340427550)
    {
        $this->testCar340427550 = $testCar340427550;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar340427550->save();

        return redirect()->route('laragen.admin.test_car340427550s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar340427550.test' => [
                                                                                                                ],
                    ];
    }
}
