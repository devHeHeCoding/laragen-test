<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car138838219.fields.test') }}" for="7" :errors="$errors->get('testCar138838219.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car138838219.fields.test')}}" name="testCar138838219.test" id="7" wire:model.defer="testCar138838219.test" />
</x-laragen::input.group>