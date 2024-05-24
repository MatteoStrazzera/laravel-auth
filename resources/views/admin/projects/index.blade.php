@extends('layouts.admin')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="container d-flex align-items-center justify-content-between">
                <h2 class="text-muted">All Projects</h2>
                <a class="btn btn-success" href="{{ route('admin.projects.create') }}">New Project</a>


            </div>
            @if (session('message'))
                <div class="alert alert-success alert-dismissable fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ session('message') }}
                </div>
            @endif
            <div class="table-responsive py-5">
                <table class="table table-light table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($projects as $project)
                            <tr class="">
                                <td scope="row">{{ $project->id }}</td>
                                <td>
                                    <img width="140" src="{{ $project->image }}" alt="{{ $project->title }}">
                                </td>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->slug }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('admin.projects.show', $project) }}">View</a>
                                    <a class="btn btn-success" href="{{ route('admin.projects.edit', $project) }}">Edit</a>
                                    /Delete
                                </td>
                            </tr>
                        @empty

                            <tr class="">
                                <td scope="row" colspan="5">Under construction</td>
                            </tr>
                        @endforelse


                    </tbody>
                </table>
            </div>

        </div>
    </section>
@endsection