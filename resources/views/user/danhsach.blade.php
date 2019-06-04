@extends('layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>Người Dùng</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Số bài đăng </th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $client)
                    <tr class="odd gradeX" align="center">
                        <td>{{$client->id}}</td>
                        <td>{{$client->name}}</td>
                        <td>{{$client->email}}</td>
                        <?php
                        $house = DB::table('house')->where('own', '=', $client->id)->get(); 
                        ?>
                        <td>{{count($house)}} </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i> <a href="manager/user/delete/{{ $client->id}}">Xóa</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection