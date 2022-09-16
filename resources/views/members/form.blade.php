<div class="row g-3">
    <div class="col-md">
        <div class="form-floating">
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ?? $member->name}}">
            <label for="floatingInputGrid">Name</label>
        </div>
    </div>
    <div class="col-md">
        <div class="form-floating">
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') ?? $member->email}}">
            <label for="floatingInputGrid">Email Address</label>
        </div>
    </div>
    <div class="col-md">

        <div class="form-floating">
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone')?? $member->phone }}">
            <label for="floatingInputGrid">Phone</label>
        </div>

    </div>
</div>
<div class="row g-3 mt-2">
    <div class="col-md">
        <div class="form-floating">
            <input type="text" class="form-control" id="ciltno" name="ciltno" value="{{ old('ciltno')?? $member->ciltno }}">
            <label for="floatingInputGrid">CILT No</label>
        </div>
    </div>
    <div class="col-md">
        <div class="form-floating">
            <select class="form-select" id="membershipstatus" name="membershipstatus"
                aria-label="Floating label select example">

                <option value="{{ $member->membershipstatus }}" @selected($member->membershipstatus == $member->membershipstatus)>{{$member->membershipstatus}}</option>
                <option value="FCILT">FCILT</option>
                <option value="MILT">MILT</option>
                <option value="CMILT">CMILT</option>
                <option value="AFFILIATE">AFFILIATE</option>
            </select>
            <label for="floatingSelectGrid">Membership Status</label>
        </div>
    </div>
    <div class="col-md pt-3">

        <label for="floatingSelectGrid">Vote Eligibility</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="canvote" id="inlineRadio1" value=1 @checked($member->canvote == 1)>
            <label class="form-check-label" for="inlineRadio1">Yes</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="canvote" id="inlineRadio2" value=0 @checked($member->canvote == 0)>
            <label class="form-check-label" for="inlineRadio2">No</label>
        </div>


    </div>
</div>
