<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car772705774.fields.test') }}" for="7" :errors="$errors->get('testCar772705774.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car772705774.fields.test')}}" name="testCar772705774.test" id="7" wire:model.defer="testCar772705774.test" />
</x-laragen::input.group>