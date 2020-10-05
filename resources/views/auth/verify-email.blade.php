@extends('layouts.app',['title'=>'Verify Email'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="card mt-4">
                <div class="card-header">Email Verificaion</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        Email sudah terkirim.
                    </div>
                    @endif
                    Lorem ipsum dolor sit amet consectetur.

                    <form action="/email/verification-notification" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-sm mt-3">Resend</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
