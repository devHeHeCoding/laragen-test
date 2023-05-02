<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car1711891965.fields.test') }}" for="7" :errors="$errors->get('testCar1711891965.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1711891965.fields.test')}}" name="testCar1711891965.test" id="7" wire:model.defer="testCar1711891965.test" />
</x-laragen::input.group>