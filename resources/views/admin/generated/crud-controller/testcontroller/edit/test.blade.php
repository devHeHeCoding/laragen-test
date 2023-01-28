<div class="form-group">
    <label for="7">
        {{ trans('cruds.test-car686976583.fields.test') }}        <input type="number"
               id="7"
               name="testCar686976583.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar686976583.test"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
