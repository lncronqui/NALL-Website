@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.profile.index') }}">Profile</a><br>
    <a href="{{ route('admin.media.index') }}">View All Media Resources</a><br>
    <a href="{{ route('admin.media.view_approved') }}">View Approved Media Resources</a><br>
    <a href="{{ route('admin.media.view_to_approve') }}">View To-Approve Media Resources</a><br>
    <a href="{{ route('admin.media.create') }}">Add Media Resource</a><br>
    <a href="{{ route('admin.media.view_to_delete') }}">
        @if (Auth::user()->hasRole('University Administrator'))
            View To-Delete Media Resources
        @else
            Approve To-Delete Media Resources
        @endif
    </a><br>
    @if (Auth::user()->hasRole('Overall Administrator'))
        <a href="{{ route('admin.overall.media.view_deleted') }}">View Deleted Media Resources</a><br>
        <a href="{{ route('admin.overall.website-info.index') }}">Edit Website Info</a><br>
        <a href="{{ route('admin.overall.accounts.index') }}">View Accounts</a><br>
        <a href="{{ route('admin.overall.accounts.create') }}">Add Account</a><br>
        <a href="{{ route('admin.overall.institutions.index') }}">View Institutions</a><br>
        <a href="{{ route('admin.overall.institutions.create') }}">Add Institution</a><br>
    @else
        <a href="">University Admin</a>
    @endif
    <form action="{{ route('admin.logout') }}" method="post">
        @csrf
        <button class="underline" type="submit">Logout</button>
    </form>
@stop
