<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1482105301;

use App\Models\TestCar1482105301;
use App\Models\TestCar21587661393;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1482105301 $testCar1482105301;

                        
    public function mount(TestCar1482105301 $testCar1482105301)
    {
        $this->testCar1482105301 = $testCar1482105301;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1482105301.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1482105301->save();

        return redirect()->route('laragen.admin.test_car1482105301s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1482105301.test' => [
                                                                                ],
                                                                    'testCar1482105301.lucinda_olson_id' => [
                                                                                ],
                    ];
    }
}
