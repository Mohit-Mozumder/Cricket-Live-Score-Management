@extends('layouts.admin_master')
@section('title')News @endsection
@section('content')
  
<div id="wrapper">
    <div class="card card-info">
        <div class="card-header">
            <div class="row">

                <div class="col-md-6">
                    <h3 class="card-title">View News</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('admin.news.index') }}" class="btn btn-sm btn-outline-warning float-right">
                        <i class="fa fa-arrow-left"></i> Back TO Index
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-8">
                
                    <p><b>Title:</b>{{$news->title}}</p><br><br>
                    <p><b>Description:</b>{!! $news->description !!}</p><br><br>
                   
                </div>
            </div>
        </div>
    </div>
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