<h4>{{ $title }}</h4>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($customers as $customer)
            <tr>
                <td><a href="{{route('customers.show', $customer->id)}}">{{$customer->name}}</a></td>
                <td>{{$customer->email}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
