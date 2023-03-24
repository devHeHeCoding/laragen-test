<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car740428112.fields.test') }}" for="7" :errors="$errors->get('testCar740428112.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car740428112.fields.test')}}" name="testCar740428112.test" id="7" wire:model.defer="testCar740428112.test" />
</x-laragen::input.group>