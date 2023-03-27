<?php
namespace App\Http\Livewire\Namespace\Test;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Generated\Namespace\Test\IndexTrait;

class Index extends Component
{
    use WithPagination;
    use IndexTrait;
}
