@extends('layouts.main')

@section('container')
  {{-- Render all menu --}}
  @include('partials.menu-template',[
    'products' => $products
  ])
@endsection