@extends("Layouts.layout")
@section('title','Thêm thể loại')
@section("content")
<style>
    .button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 10px;
    }

</style>
<form style="margin: 10px"   method="POST" action="{{ route('add_category') }}" enctype="multipart/form-data">
    @csrf
    <div style="padding: 10px 0px 20px 0px">
        <strong>
            <a href="{{ route('index_category') }}">Quay lại</a> <br>
        </strong>
    </div>
    <p>
        <label>Tên Thể Loại</label>
        <input style="width: 350px; height: 35px" class="w3-input w3-border w3-round-large" type="text" name="tentxt">
    </p>
    <p>
        <label>Mô tả</label>
        <input style="width: 350px; height: 35px" class="w3-input w3-border w3-round-large" type="text" name="motatxt">
    </p>
    <input class="button" style="margin: 10px 0 35px 50px" type="submit" value="Thêm">
</form>
@endsection
