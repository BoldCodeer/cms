@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Laravel 8 Livewire Crud - laratutorials.com</h2>
                </div>
                <div class="card-body">
                    @livewire('groups')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
