@extends('layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>Danh sách nhà</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
             @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Người đăng</th>
                        <th>Emnail</th>
                        <th >Địa chỉ</th>
                        <th>Chi tiết </th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <?php $stt = 0; ?>
                <tbody>
                    @foreach($house as $home)

                <?php 
                    $province = DB::table('province')->where('id', '=', $home->province)->get();
                     $district = DB::table('district')->where('id', '=', $home->district)->get();
                     $ward = DB::table('ward')->where('id', '=', $home->ward)->get();
                     $addr = $home->location .", " . $ward[0]->name .", " . $district[0]->name .", "  . $province[0]->name;
                    $stt += 1; 

                ?>

                    <tr class="odd gradeX" align="center">
                        <td>{{$stt}}</td>
                        <td>{{$home->name}}</td>
                        <td>{{$home->email}}</td>
                        <td style="width: 300px">{{$addr}}</td>
                        
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="detail/{{$home->id}}">Chi Tiết</a></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="manager/house/delete/{{$home->id}}"> Xóa</a></td>
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