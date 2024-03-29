@extends('master.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Welcome {{ Auth::user()->name }}!</h3>
                    
                    <a href="/show_user"><button type="button" class="btn btn-success">Account Info</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
