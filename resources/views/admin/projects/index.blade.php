@extends('layouts.admin')

@section('content')
    <section class="py-5">
        <div class="container">
            <h2 class="text-muted">All Projects</h2>
            <div class="table-responsive">
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
                                    /Edit/Delete
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
