<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car2018025434.fields.test') }}" for="7" :errors="$errors->get('testCar2018025434.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car2018025434.fields.test')}}" name="testCar2018025434.test" id="7" wire:model.defer="testCar2018025434.test" />
</x-laragen::input.group>