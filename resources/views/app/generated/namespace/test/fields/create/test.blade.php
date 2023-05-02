<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car1265047689.fields.test') }}" for="7" :errors="$errors->get('testCar1265047689.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1265047689.fields.test')}}" name="testCar1265047689.test" id="7" wire:model.defer="testCar1265047689.test" />
</x-laragen::input.group>