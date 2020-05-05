@extends('layouts.layoutsstaff')

@section('content')
<div class="container">
  <h3 class="text-center">รายการลา</h3>
  <div class="clearfix mb-2">
    <div class="float-right">
           <form method="GET" class="form-inline">

               <div class="form-group">
                   <label for="search" class="sr-only">Search</label>
                   <input type="text" class="form-control" id="search" name="search" placeholder="" value="{{ !empty($_GET['search']) ? $_GET['search'] : '' }}">
</div>
              <button type="submit" class="btn btn-primary "><i class="fa fa-search"></i> ค้นหา</button>
              <a href="{{ url('product/create') }}" class="btn btn-success float-right ml-2"> ยื่นเรื่องขอลา</a>
            </form>
        </div>




</div>


  <table class="table table-striped">
<thead class="text-center">
  <tr>
    <th scope="col">ชื่อ-สกุล</th>
    <th scope="col">การลา</th>
    <th scope="col">ประเภท</th>
    <th scope="col">วันที่ลา</th>
    <th scope="col">ไฟล์แนบ</th>
    <th scope="col">สถานะ</th>
    <th scope="col">จัดการ</th>
  </tr>
</thead>
<tbody class="text-center">
  <tr>
    <td >test user</td>
    <td >ลาป่วย</td>
    <td><h5><span class="badge badge-success">ลาเต็มวัน</span></h5></td>
    <td >5/5/2020</td>
    <td > </td>
    <td><h5><span class="badge badge-primary">รอการอนุมัติ</span></h5></td>
    <td>
    <a href="#" class="btn btn-warning">แก้ไข</a>
    <a href="#" class="btn btn-danger">ยกเลิกการลา</a>
  </td>
  </tr>

</tbody>
</table>
</div>
@endsection
