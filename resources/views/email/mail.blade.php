Full name: <strong>{{ $name }}</strong>
<br/>
Email: <strong>{{ $email }}</strong>
<br/>
Phone: <strong>{{ $phone }}</strong>
<br/>
Package: <strong>{{ $package }}</strong>
<br/>
@if( $other )
Service/Product type: <strong>{{ $other }}</strong>
@else
Service/Product type: <strong>{{ $sp_type }}</strong>
@endif
<br/>
Message: <strong>{{ $msg }}</strong>
