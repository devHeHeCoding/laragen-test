<div class="form-group">
    <label for="7">
        {{ trans('cruds.test-car1639058842.fields.test') }}        <input type="text"
               id="7"
               name="testCar1639058842.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar1639058842.test"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
