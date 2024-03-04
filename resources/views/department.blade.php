<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        #admin_btn {
            display: inline-block;
            position: relative;
            left: 81%;
        }

        .sidebar {
            display: inline-flex;
            border: 4px solid black;
            background: grey;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            padding: 22px 40px 20px 12px;
            text-decoration: none;
            color: white
        }

        .form_box h3 {
            border: 2px solid blue;
            position: absolute;
            top: 155px;
            left: 274px;
            padding: 7px 52% 10px 45px;
            background-color: #6b6be7;

        }

        .side_bar {
            display: inline-flex;
            position: absolute;
            top: 77px;
            left: 235px;
        }

        .side_bar ul li {
            display: inline-flex;
            position: relative;
            top: 23px;
            padding: 4px 13px 0px 9px;
        }

        .form {

            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            width: 200px;
            position: absolute;
            top: 220px;
            left: 355px;

        }

        label {
            margin-bottom: 5px;
        }

        input {
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .table {

            width: 26%;
            /* margin-bottom: 1rem; */
            color: #212529;
            position: absolute;
            top: 258px;
            left: 480px;
            border: 4px solid blue;
            border-radius: 6px;

        }

        .addnew button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            position: absolute;
            top: 80px;
            left: 250px;
        }

    </style>
</head>

<body>
    @extends('layouts.main')
    @section('main-section')
        <div class="addnew">
            <a href="{{ route('department_addDepart') }}"><button class="btn">Add New Department +</button></a>
        </div>
        <div class="table">
            <table>
                <tr>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Actions</th>
                </tr>
                @foreach ($department as $items)
                    <tr>
                        <td>{{ $items->department }}</td>
                        <td>{{ $items->designation }}</td>
                        <td><a href="{{ url('/department/delete', ['id' => $items->department_id]) }}"><button
                                    class="btn btn-danger">Delete</button></a></td>
                    </tr>
                @endforeach

            </table>
        </div>
    @endsection
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</html>
