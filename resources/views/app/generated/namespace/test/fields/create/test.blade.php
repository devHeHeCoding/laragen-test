<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car1384594070.fields.test') }}" for="7" :errors="$errors->get('testCar1384594070.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1384594070.fields.test')}}" name="testCar1384594070.test" id="7" wire:model.defer="testCar1384594070.test" />
</x-laragen::input.group>