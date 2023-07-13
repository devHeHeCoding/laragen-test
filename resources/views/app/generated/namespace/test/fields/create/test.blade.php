<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car320848272.fields.test') }}" for="11" :errors="$errors->get('testCar320848272.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car320848272.fields.test')}}" name="testCar320848272.test" id="11" wire:model.defer="testCar320848272.test" />
</x-laragen::input.group>