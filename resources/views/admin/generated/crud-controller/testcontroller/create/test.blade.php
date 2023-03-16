<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car2045697739.fields.test') }}" for="7" :errors="$errors->get('testCar2045697739.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car2045697739.fields.test')}}" name="testCar2045697739.test" id="7" wire:model.defer="testCar2045697739.test" />
</x-laragen::input.group>