<?php

@extends('layouts.app')

@section('content')
    <h1>Users</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->full_name }} ({{ $user->email }})</li>
        @endforeach
    </ul>
@endsection
