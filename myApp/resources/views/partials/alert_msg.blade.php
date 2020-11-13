@if(session('alert-success'))
<div class="alert alert-success alert-dismissible fade show col-8 mar-left-16" role="alert">
    <strong>Success!</strong> {{session('alert-success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@elseIf((session('alert-error')))
<div class="alert alert-danger alert-dismissible fade show col-8 mar-left-16" role="alert">
    <strong>Failed!</strong> {{session('alert-error')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endIf
