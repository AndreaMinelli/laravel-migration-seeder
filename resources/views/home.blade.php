<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    @vite('resources/js/app.js')
</head>

<body>
    @include('includes.header')

    <main class="bg-dark py-4 min-vh-100">
        <div class="container">
            <table class="table text-white text-center">
                <thead>
                    <tr>
                        <th scope="col">Numero Treno</th>
                        <th scope="col">Stazione di Partenza</th>
                        <th scope="col">Orario di Partenza</th>
                        <th scope="col">Stazione di Arrivo</th>
                        <th scope="col">Orario di Arrivo</th>
                        <th scope="col">In Orario</th>
                        <th scope="col">Cancellato</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <th scope="row">{{ $train->train_number }}</th>
                            <td>{{ $train->departure_station }}</td>
                            <td>{{ $train->departure_time }}</td>
                            <td>{{ $train->arrival_station }}</td>
                            <td>{{ $train->arrival_time }}</td>
                            <td>{{ $train->in_time }}</td>
                            <td>{{ $train->deleted }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>
