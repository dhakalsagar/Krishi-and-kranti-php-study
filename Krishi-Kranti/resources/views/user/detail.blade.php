<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
@include('user.css')
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
  color: green;
}

th, td {
  text-align: left;
  padding: 8px;
}
h2{
  padding-top: 40px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
@include('user.header')
</head> 
<body>

  <h2 style="padding-top: 80px; color: green;" >Information Table</h2>
  <div style="overflow-x:auto;">
    <table>
      <tr>
        <th>Register Num</th>
        <th>Owner</th>
        <th>Vacineted</th>
        <th>Bredder</th>
        <th>Vaccineteddate</th>
        <th>Sibling</th>
        <th>Child Image</th>
      </tr>
      @foreach($info as $info)
      <tr>
        <td style="padding-left: 45px;" >{{$info->informationn_id}}</td>
        <td>{{$info->owner}}</td>
        <td>{{$info->vaccineted}}</td>
        <td>{{$info->breeder}}</td>
        <td>{{$info->vaccineteddate}}</td>
        <td>{{$info->sibling}}</td>
        <td><img height="50px" width="50px" src="/informationnimage/{{$info->child_image}}"></td>
      </tr>
        @endforeach
      </table>
    </div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</body>
@include('user.footer')
@include('user.script')
</html>
