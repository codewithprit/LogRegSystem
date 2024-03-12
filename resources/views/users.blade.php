<h1>User Login</h1>

<!-- @if($errors->any())
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif -->

<form action="login" method="post">
    @csrf
    <input type="text" name="username" placeholder="enter username" value="{{old('username')}}">
    <br>
    <span style="color: red">@error('username'){{$message}}@enderror</span>
    <br>
    <input type="text" name="password" id="" placeholder="enter password" value="{{old('password')}}">
    <br>
    <span style="color: red;">@error('password'){{$message}}@enderror</span>
    <br>
    <button type="submit">Login</button>
</form>