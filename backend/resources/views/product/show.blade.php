@extends('layout.main')


@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex p-3">
                            <div class="mr-3">
                                 <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                            </div>
                            <form action="{{ route('product.delete', $product->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>Id</td>
                                        <td>{{ $product->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Naming</td>
                                        <td>{{ $product->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td>{{ $product->description }}</td>
                                    </tr>
                                    <tr>
                                        <td>Content</td>
                                        <td>{{ $product->content }}</td>
                                    </tr>
                                    <tr>
                                        <td>New price</td>
                                        <td>{{ $product->old_price }}</td>
                                    </tr>
                                    <tr>
                                        <td>Old price</td>
                                        <td>{{ $product->new_price }}</td>
                                    </tr>
                                    <tr>
                                        <td>Count</td>
                                        <td>{{ $product->count }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
            <!-- /.row -->


        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
@endsection
