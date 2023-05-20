@extends('layouts.master')
@section('title')News @endsection
@section('content')
<div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="container-fluid">
                <h1 class="h3 mb-4 text-gray-800"></h1>
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
                            <td> <a href="{{route('admin.news.show', $news->id)}}">More &rarr;</a> </td>


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