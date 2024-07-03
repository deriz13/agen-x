<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Ticket</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="ticket" action="{{ route('ticket.store') }}" method="POST">
          @csrf
          <div class="row">
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }} col-md-6 col-lg-12">
              <label for="name">Nama</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Nama" value="{{ old('name') }}">
              @if ($errors->has('name'))
                <small class="form-text help-block" style="color:red">{{ $errors->first('name') }}</small>
              @endif
            </div>
            <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }} col-md-6 col-lg-12">
              <label for="address">Alamat</label>
              <input type="text" name="address" class="form-control" id="address" placeholder="Alamat" value="{{ old('address') }}">
              @if ($errors->has('address'))
                <small class="form-text help-block" style="color:red">{{ $errors->first('address') }}</small>
              @endif
            </div>
            <div class="form-group {{ $errors->has('no_tlp') ? 'has-error' : '' }} col-md-6 col-lg-12">
              <label for="no_tlp">No Hp</label>
              <input type="number" name="no_tlp" class="form-control" id="no_tlp" placeholder="No Tlp" value="{{ old('no_tlp') }}">
              @if ($errors->has('no_tlp'))
                <small class="form-text help-block" style="color:red">{{ $errors->first('no_tlp') }}</small>
              @endif
            </div>
            <div class="form-group {{ $errors->has('birthdate') ? 'has-error' : '' }} col-md-6 col-lg-12">
                <label for="birthdate">Tanggal Lahir</label>
                <input type="date" name="birthdate" class="form-control" id="birthdate" value="{{ old('birthdate') }}">
                @if ($errors->has('birthdate'))
                    <small class="form-text help-block" style="color:red">{{ $errors->first('birthdate') }}</small>
                @endif
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="ticket" class="btn btn-primary">Create Ticket</button>
      </div>
    </div>
  </div>
</div>