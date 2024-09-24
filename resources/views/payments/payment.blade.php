<form action="{{ url('charge') }}" method="post">
    @csrf
    <input type="text" name="amount" value="{{$amount}}" />
    <input type="submit" name="submit" value="Pay Now" />
</form>