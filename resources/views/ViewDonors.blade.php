<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Donors</title>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Amount</th>
                    <th>DonateDate</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $donor as $d)
                <tr>
                    <td >{{$d->name}}</td>
                    <td>{{$d->email}}</td>
                    <td>{{$d->amount}}</td>
                    <td>{{$d->created_at}}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</body>
</html>