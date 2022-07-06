<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Tes FE</title>
</head>

<body>
    <div class="container mt-4">
        <div class="text-center">
            <h1 id="selected_data"></h1>
        </div>
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-4">
                <select class="form-control" id="api">
                    @foreach ($data as $i)
                        <option value="{{ $i['name'] }}">
                            {{ $i['name'] }}
                        </option>
                    @endforeach
                </select>

                <div class="text-center">
                    <button type="button" onclick="show();" class="btn btn-primary mt-4">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function show() {
            var e = document.getElementById("api");
            var strUser = e.options[e.selectedIndex].text;

            document.getElementById("selected_data").innerHTML = strUser;
        }
    </script>
</body>

</html>

{{-- Dikerjakan tanggal 6 Juli 2022, selesai pukul 22.15 --}}
