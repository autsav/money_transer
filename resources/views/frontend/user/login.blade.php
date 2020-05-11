<form method="post" action="{{url('login')}}">
	@csrf
	<input type="text" name="email">
	<input type="password" name="password">
	<input type="submit">
</form>