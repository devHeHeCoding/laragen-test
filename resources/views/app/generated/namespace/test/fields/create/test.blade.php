<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car239131994.fields.test') }}" for="11" :errors="$errors->get('testCar239131994.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car239131994.fields.test')}}" name="testCar239131994.test" id="11" wire:model.defer="testCar239131994.test" />
</x-laragen::input.group>