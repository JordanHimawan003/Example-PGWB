@extends('layouts.main')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <p>Belajar Menampilkan Data Dari Database</p>

            <table class="table table-hover table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($getCategory as $item)
                    <tr>
                        <th scope="row">{{ $item -> id }}</th>
                        <td>{{ $item -> name }}</td>
                        <td>{{ $item -> description }}</td>
                        <td><a href="{{ route('categoryDelete', $item -> id) }}" class="btn btn-sm btn-danger">Delete</a></td> <!-- Lempar ke route dulu melalui href -->
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </section>
  </div>

@endsection