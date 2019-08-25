<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" >
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" >

    <title>Hello, world!</title>
</head>
<body>

<form method="post" action="{{ route('certify') }}">
    @csrf
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">البريد الالكتروني</th>
        <th scope="col">رقم التليفون</th>
        <th scope="col">التفعيل</th>


        <th scope="col">المؤهل الدراسى</th>
        <th scope="col">الوظيفة الحالية</th>

        <th scope="col">الاسم الاول</th>
        <th scope="col">الاسم الثاني</th>
        <th scope="col">الاسم الاخير</th>

        <th scope="col">first name</th>
        <th scope="col">middle name</th>
        <th scope="col">last name</th>

        <th scope="col">يوم الميلاد</th>
        <th scope="col">شهر الميلاد</th>
        <th scope="col">سنة الميلاد</th>

        <th scope="col">الجنس</th>
        <th scope="col">الحالة الإجتماعية</th>
        <th scope="col">المحافظة</th>
        <th scope="col">المدينة</th>
        <th scope="col">الشهادة</th>
        <th scope="col">certify</th>
        <th scope="col">verify location</th>
        <th scope="col">notify</th>
    </tr>
    </thead>
    <tbody>
    @if(count($participants)>0)
        {{$i=0}}
        @foreach($participants as $user)
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->email_verified_at}}</td>

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
                <td><input type="checkbox" value="{{$user->id}}" name="certify[]"></td>
                <td><input type="checkbox" value="{{$user->id}}" name="verify[]"> </td>
                <td><input type="checkbox" value="{{$user->id}}" name="notify[]"> </td>
            </tr>

    @endforeach
    @endif
    </tbody>

</table>
    <input type="text" placeholder="please enter text" name="message">
<button type="submit">submit</button></form>



    <form method="post" action="{{ route('certify') }}">
        @csrf
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">البريد الالكتروني</th>
                <th scope="col">رقم التليفون</th>
                <th scope="col">التفعيل</th>

                <th scope="col">النوع</th>

                <th scope="col">الاسم</th>

                <th scope="col">المحافظة</th>
                <th scope="col">المدينة</th>
                <th scope="col">التصنيف</th>
                <th scope="col">الشهادة</th>
                <th scope="col">certify</th>
                <th scope="col">verify location</th>
                <th scope="col">notify</th>
            </tr>
            </thead>
            <tbody>
            @if(count($supporters)>0)
                {{$i=0}}
                @foreach($supporters as $user)
                    <tr>
                        <th scope="row">{{++$i}}</th>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->email_verified_at}}</td>
                        <td>{{$user->type}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->state}}</td>
                        <td>{{$user->city}}</td>
                        <td>{{$user->class}}</td>
                        <td>{{$user->certificate}}</td>
                        <td><input type="checkbox" value="{{$user->id}}" name="certify[]"></td>
                        <td><input type="checkbox" value="{{$user->id}}" name="verify[]"> </td>
                        <td><input type="checkbox" value="{{$user->id}}" name="notify[]"> </td>
                    </tr>

                @endforeach
            @endif
            </tbody>

        </table>
        <input type="text" placeholder="please enter text" name="message">
        <button type="submit">submit</button></form>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" ></script>
<script>

    $(document).ready(function() {
        $('#example').DataTable( {
            "pageLength": 5
        } );
        $('.dataTables_length').addClass('bs-select');
    } );
</script>

</body>

</html>