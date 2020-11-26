@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Ha habido un error en el servidor. Reintente nuevamente mas tarde'))
