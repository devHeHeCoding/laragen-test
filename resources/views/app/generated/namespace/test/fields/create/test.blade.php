<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car445601805.fields.test') }}" for="7" :errors="$errors->get('testCar445601805.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car445601805.fields.test')}}" name="testCar445601805.test" id="7" wire:model.defer="testCar445601805.test" />
</x-laragen::input.group>