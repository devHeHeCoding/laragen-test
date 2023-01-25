<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar241019467;

use App\Models\TestCar241019467;
                use App\Models\TestCar21576251869;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar241019467 $testCar241019467;

                                            
    public function mount(TestCar241019467 $testCar241019467)
    {
        $this->testCar241019467 = $testCar241019467;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar241019467->save();

        return redirect()->route('laragen.admin.test_car241019467s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar241019467.test' => [
                                                                                                                ],
                                                'testCar241019467.dedrick_mueller_i_id' => [
                                                                                                                ],
                    ];
    }
}
