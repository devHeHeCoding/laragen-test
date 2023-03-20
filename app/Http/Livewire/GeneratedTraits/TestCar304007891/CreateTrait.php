<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar304007891;

use App\Models\TestCar304007891;
use App\Models\TestCar21434168180;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar304007891 $testCar304007891;

                        
    public function mount(TestCar304007891 $testCar304007891)
    {
        $this->testCar304007891 = $testCar304007891;
                                }

    public function render()
    {
        return view('livewire.generated.test-car304007891.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar304007891->save();

        return redirect()->route('laragen.admin.test_car304007891s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar304007891.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar304007891.lila_homenick_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
