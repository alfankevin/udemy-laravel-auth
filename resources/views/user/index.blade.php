@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>User List</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">User</a></div>
                <div class="breadcrumb-item"><a href="#">Management</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">User Management</h2>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header justify-content-between">
                            <h4>User List</h4>
                            <div class="section-header-button d-flex align-items-center">
                                <form method="GET" class="mr-1">
                                    <div class="input-group">
                                        <input name="search" type="text" class="form-control" placeholder="Search" autocomplete="off">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <a href="features-post-create.html" class="btn btn-primary">View All</a>
                            </div>               
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                    </tr>
                                    @forelse ($users as $key => $user)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $user->name }}
                                                <div class="table-links">
                                                    <a href="#">View</a>
                                                    <div class="bullet"></div>
                                                    <a href="#">Edit</a>
                                                    <div class="bullet"></div>
                                                    <a href="#" class="text-danger">Trash</a>
                                                </div>
                                            </td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>
                                                @if ($user->email_verified_at !== null)
                                                    <div class="badge badge-success">Verified</div>
                                                @else
                                                    <div class="badge badge-warning">Unverified</div>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                    <tr>
                                        <td>
                                            No Data Found
                                        </td>
                                    </tr>
                                    @endforelse
                                </table>
                            </div>
                            <div class="float-right">
                                <nav>
                                    <ul class="pagination">
                                        {{ $users->withQueryString()->links() }}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
