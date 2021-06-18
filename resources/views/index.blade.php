@extends('layouts.master')
@section('page-css')
@endsection
@section('content')



    @if(session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">x
          {{ session('message') }}
        </div>
    @endif
                
                @livewire('add-item')
                
                
                 @livewire('item-list') 
                


</div>

@endsection
@section("page-js")
@endsection