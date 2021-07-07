@if(\Session::has('success'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Succsess!</strong> {{ \Session::get('success') }}
    </div>
@endif
@if(\Session::has('danger'))
    <div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Danger!</strong> {{ \Session::get('danger') }}
    </div>
@endif
