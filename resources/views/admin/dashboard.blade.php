@extends('layouts.admin')

@section('content')
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th>Overall Admin</th>
                <th>University Admin</th>
                <th>All Admins</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><a href="{{ route('admin.articles.index') }}">Approve Articles</a></th>
                <th><a href="{{ route('admin.articles.index') }}">View Approved Articles</a></th>
                <th>
                    <form action="{{ route('admin.logout') }}" method="post">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </th>
            </tr>
            <tr>
                <th><a href="{{ route('admin.articles.view') }}">View All Articles</a></th>
                <th><a href="{{ route('admin.articles.view') }}">View All Specific Articles</a></th>
                <th></th>
            </tr>
            <tr>
                <th></th>
                <th><a href="{{ route('admin.articles.create') }}">Create Articles</a></th>
                <th></th>
            </tr>
        </tbody>
    </table>
@stop
