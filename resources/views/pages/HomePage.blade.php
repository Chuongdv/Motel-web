@extends('layout.blueprint')
@section('body')

    <?php $house = $house->paginate(3); ?>
        @foreach($house as $home)
            <!-- Blog Post 1 -->
            <article class="clearfix">
                @if(is_null($home->image1))
                <a href="/detail/{{$home->id}}"><img src="{{asset('img/gallery/gallery-img-1-4col.jpg')}}" alt="Post Thumb" class="align-left"></a>
                @else
                <a href="/detail/{{$home->id}}"><img style="width: 270px; height: 220px" src="image/house/{{$home->image1}}" alt="Post Thumb" class="align-left"></a>
                @endif

                <?php 
                    $province = DB::table('province')->where('id', '=', $home->province)->get();
                     $district = DB::table('district')->where('id', '=', $home->district)->get();
                     $ward = DB::table('ward')->where('id', '=', $home->ward)->get();
                     $addr = $home->location .", " . $ward[0]->name .", " . $district[0]->name .", "  . $province[0]->name;
                    $display = $addr;
                        
                     if(strlen( $addr) > 58)
                     {
                        $display =  mb_substr($addr, 0, 55);
                        $display = $display . "...";
                     } 
                    
                ?>


                <h4 class="title-bg"><a href="/detail/{{$home->id}}">{{$display}}</a></h4>
                <?php 
                    $describe = $addr .": ";
                    $describe = $describe . $home->description;
                        
                     if(strlen( $describe) > 203)
                     {
                        $display =  mb_substr($describe, 0, 200);
                        $display = $display . "...";
                     } 
                    
                ?>



                    <p>{{$display}}</p>

    
                    <span id="cost" style=" font-size: 30px">Giá: {{$home->cost}}000vnd </span>
    
                    <div class="post-summary-footer">
                        <ul class="post-data-3">
                            <li><i class="icon-calendar"></i> {{$home->time}}</li>
                        </ul>
                    </div>
            </article>
        @endforeach
        
            
            <div class="pagination">
                <ul>
                <!--
                @for($i=1; $i <= $house->lastPage(); $i += 1)
                @if($house->currentPage() == $i)
                <li class="active"><a href="{!! str_replace('/?', '?', $house->url($i)) !!}">{{$i}}</a></li>
                @else
                <li><a href="{!! str_replace('/?', '?', $house->url($i)) !!}">{{$i}}</a></li>
                @endif
                @endfor
            -->
            {{$house->links()}}
                </ul>
            
            </div>

        


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $("#selectProvince").change(selectProvince);
    $('#selectDistrict').change(selectDistrict);
    $('#selectWard').change(selectWard);

    function selectProvince(){
    var id = $(this).find(":checked").val();
   if(id != -1){
    //goi server lay cac quan/huyen
      $.ajaxSetup({
          headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
      });

      $.ajaxSetup({ cache: false });

      $.ajax({
          url : "/getDistrict/" + id,
          type : "get",
          dataType:"json",
          data : {
          },
          success : function (result){
            $("#selectDistrict").html("<option value=\"-1\">Quận/Huyện</option>");
            $("#selectWard").html("<option value=\"-1\">Phường/Xã</option>");
            $.each (result, function (key, item){
                var tmp = "<option value=\"" + item['id'] + "\">" + item['name'] + "</option>";
                $("#selectDistrict").append(tmp);
            });
          }
      });

   }
   else{
    $("#selectDistrict").html("<option value=\"-1\">Quận/Huyện</option>");
    $("#selectWard").html("<option value=\"-1\">Phường/Xã</option>");
    alert("Bạn hãy chọn một tỉnh thành cụ thể");
   }

    }



 function selectDistrict(){
    var id = $(this).find(":checked").val();
   if(id != -1){
    //goi server lay cac quan/huyen
      $.ajaxSetup({
          headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
      });

      $.ajaxSetup({ cache: false });

      $.ajax({
          url : "/getWard/" + id,
          type : "get",
          dataType:"json",
          data : {
          },
          success : function (result){
            $("#selectWard").html("<option value=\"-1\">Phường/Xã</option>");
            $.each (result, function (key, item){
                var tmp = "<option value=\"" + item['id'] + "\">" + item['name'] + "</option>";
                $("#selectWard").append(tmp);
            });
          }
      });
    }
    else{
    $("#selectWard").html("<option value=\"-1\">Phường/Xã</option>");
    alert("Bạn hãy chọn một quận huyện thành cụ thể");
   }
 }

function selectWard(){
    var id = $(this).find(":checked").val();
    if(id == -1){
        alert("Bạn hãy chọn một phường, xã cụ thể");
    }
}









});


</script>
@endsection