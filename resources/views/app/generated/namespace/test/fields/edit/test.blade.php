<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car974755813.fields.test') }}" for="7" :errors="$errors->get('testCar974755813.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car974755813.fields.test')}}" name="testCar974755813.test" id="7" wire:model.defer="testCar974755813.test" />
</x-laragen::input.group>