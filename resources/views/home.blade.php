@extends('layouts.app')

@section('content')
<div class="">
    <div class="flex justify-center">
        <div class="">
            <div class="card">
                <div class="font-bold text-xl ml-2 mb-2">Dashboard</div>

                <div class="">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection