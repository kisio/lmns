@extends('app')
@yield('content')

<form method="GET" action="{{ route('search') }}">
    <input type="text" name="query" placeholder="Search...">
    <button type="submit">Search</button>
</form>
