<div class="col-md-6">
    <label for="office" class="form-label">Office</label>
    <select class="form-select" id="office" name="office_id" required>
        <option value="">Choose...</option>
        @foreach ($offices as $key => $value)
            <option value="{{ $key }}">{{ strtoupper($value) }}</option>
        @endforeach
    </select>
    <div class="invalid-feedback">
        Please provide a valid Office.
    </div>
</div>

<div class="row g-3">
    <div class="col-md-6">
        <label for="member" class="form-label">Member' Name</label>
        <select class="form-select" id="member" name="member_id" required>
            <option value="">Choose...</option>
            @foreach ($members as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="invalid-feedback">
            Please select your Member Name.
        </div>
    </div>

    <select class="form-select" id="member" name="member_id" required>
        <option value="">Choose...</option>
        @for ($i = 0; $i < count($norminated); $i++)
            <option value="{{ $norminated[$i]->member['id'] }}">
                {{ strtoupper($norminated[$i]->member['name']) }}</option>
        @endfor
    </select>
