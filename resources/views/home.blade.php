<!DOCTYPE HTML>
<html>
<head>
    <title></title>
<style>
    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }
    .flex-center {
        position: fixed;
        right: 590px;
        align-items: center;
        /*display: flex;*/
        justify-content: center;
    }
</style>
</head>
<body>
<div class="top-right">

        <button value="Create">
            <a href="{{url('phonebook')}}">Create</a></button>

</div>

<div class="flex-center">

@foreach($some_data as $data_input)
<table>

        <tr>
        <td> {{$data_input->name}}:  </td>
        <td> {{$data_input->number}}  </td>
        </tr>

</table>
@endforeach
</div>
</body>
</html>
