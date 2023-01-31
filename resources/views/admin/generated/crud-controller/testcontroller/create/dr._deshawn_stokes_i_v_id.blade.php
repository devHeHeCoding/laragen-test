<div class="form-group {{$errors->has('testCar561906651.dr._deshawn_stokes_i_v_id') ? 'error' : ''}}">
    <label for="1">
        {{ trans('cruds.test-car561906651.fields.dr._deshawn_stokes_i_v_id') }}        <input type="text"
               id="1"
               name="testCar561906651.dr._deshawn_stokes_i_v_id"
               class="form-control"
               placeholder="dr._deshawn_stokes_i_v_id"
               wire:model.defer="testCar561906651.dr._deshawn_stokes_i_v_id"
        >
        <span class="error-message">
            {{$errors->first('testCar561906651.dr._deshawn_stokes_i_v_id')}}        </span>
    </label>
</div>
