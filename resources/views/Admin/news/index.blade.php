@extends('layouts.admin_master')
@section('title')News @endsection
@section('content')
<div id="wrapper">

    <!-- Sidebar -->
    @include('admin.includes.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            @include('admin.includes.topbar')
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                @include('admin.includes.flash_message')
                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">All News</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $news)
                        <tr>
                           
                            <td>{{ $news->title }}</td>
                            <td> <a href="{{route('admin.news.show', $news->id)}}">More info</a> </td>
                            <td> <a href="{{route('admin.news.edit', $news->id)}}">Edit</a> </td>
                            <td> @include('admin.includes._confirm_delete',[
                                'id' => $news->id,
                                'url' => route('admin.news.destroy', $news->id),
                                'message' => 'Are you sure want to delete this news?',
                                ]) </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        @include('admin.includes.footer')
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
@endsection