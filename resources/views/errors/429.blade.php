@extends('errors::minimal')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __('Se han enviado demasiadas solicitudes al servidor. Aguarde un momento y reintente.'))
