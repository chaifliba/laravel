<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        table {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td,th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        tr:nth-child(even){background-color: #f2f2f2;}
        
        tr:hover {background-color: #ddd;}
        
        th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #4CAF50;
          color: white;
        }
        </style>

    <table>
        <tr>
            <th>ID</th>
            <th>SENDER</th>
            <th>RECIPIENT</th>
            <th>CLIENT NUMBER</th>
            <th>DATE</th>
        </tr>
      @foreach ($request as $request)
      <tr>
        <td>{{$request->id}}</td>
        <td>{{$request->sender}}</td>
        <td>{{$request->recipient}}</td> 
        <td>{{$request->clientnumber}}</td>
        <td>{{$request->date}}</td>   
      </tr>
      @endforeach
    </table>
</body>
</html>
