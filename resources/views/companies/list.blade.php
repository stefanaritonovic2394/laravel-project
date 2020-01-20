<h4>{{ $title }}</h4>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($companies as $company)
            <tr>
                <td><a href="{{route('companies.show', $company->id)}}">{{$company->name}}</a></td>
                <td>{{$company->address}}</td>
                <td>{{$company->email}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
