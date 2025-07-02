@extends('panel.panel-layout')

@section('admin-main')

<div class="box-content card white">

      {{-- KUTULAR --}}
     @include('panel.inc.kutular')
        {{-- KUTULAR --}}

        {{-- RAKAMLAR --}}

        {{-- RAKAMLAR --}}


        {{-- BAĞIŞLAR --}}

@include('panel.inc.bagislar')
        {{-- BAĞIŞLAR --}}

        {{-- ÜYELER --}}
@include('panel.inc.uyeler')
         {{-- ÜYELER --}}





</div>

@endsection
