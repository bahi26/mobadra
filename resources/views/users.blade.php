<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">#</th>
        <th scope="col">#</th>
        <th scope="col">#</th>
        <th scope="col">#</th>

        <th scope="col">#</th>
        <th scope="col">#</th>
        <th scope="col">#</th>

        <th scope="col">#</th>
        <th scope="col">#</th>
        <th scope="col">#</th>

        <th scope="col">#</th>
        <th scope="col">#</th>
        <th scope="col">#</th>

        <th scope="col">#</th>
        <th scope="col">#</th>
        <th scope="col">#</th>

        <th scope="col">#</th>
        <th scope="col">#</th>
        <th scope="col">#</th>
        <th scope="col">#</th>
        <th scope="col">#</th>
        <th scope="col">#</th>
        <th scope="col">#</th>
    </tr>
    </thead>
    <tbody>
    @if(count($users)>1)
        {{$i=0}}
        @foreach($users as $user)
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->email_verified_at}}</td>
                <td>{{$user->type}}</td>
                <td>{{$user->degree}}</td>
                <td>{{$user->job}}</td>
                <td>{{$user->arabic_first_name}}</td>
                <td>{{$user->arabic_second_name}}</td>
                <td>{{$user->arabic_last_name}}</td>
                <td>{{$user->english_first_name}}</td>
                <td>{{$user->english_second_name}}</td>
                <td>{{$user->english_last_name}}</td>
                <td>{{$user->birth_day}}</td>
                <td>{{$user->birth_month}}</td>
                <td>{{$user->birth_year}}</td>
                <td>{{$user->gender}}</td>
                <td>{{$user->status}}</td>
                <td>{{$user->state}}</td>
                <td>{{$user->city}}</td>
                <td>{{$user->certificate}}</td>
                <td><form method="post" action="{{ route('certify') }}">@csrf<input type="hidden" value="{{$user->id}}" name="id"> <button type="submit">certify</button></form></td>
                <td><form method="post" action="{{ route('verify_location') }}">@csrf<input type="hidden" value="{{$user->id}}" name="id"> <button type="submit">verify</button></form></td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>