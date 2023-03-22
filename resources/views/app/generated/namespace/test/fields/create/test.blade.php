<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car876034793.fields.test') }}" for="7" :errors="$errors->get('testCar876034793.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car876034793.fields.test')}}" name="testCar876034793.test" id="7" wire:model.defer="testCar876034793.test" />
</x-laragen::input.group>