<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <style>
        .button_slide {
            color: #FFF;
            border: 2px solid rgb(216, 2, 134);
            border-radius: 0px;
            padding: 18px 36px;
            display: inline-block;
            font-family: "Lucida Console", Monaco, monospace;
            font-size: 14px;
            letter-spacing: 1px;
            cursor: pointer;
            box-shadow: inset 0 0 0 0 #D80286;
            -webkit-transition: ease-out 0.4s;
            -moz-transition: ease-out 0.4s;
            transition: ease-out 0.4s;
        }

        .slide_right:hover {
            box-shadow: inset 400px 0 0 0 #D80286;
        }

        .alert {
            color: white;
        }

        .alert code {
            overflow-wrap: break-word;
            word-wrap: break-word;
            white-space: pre-wrap;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <h2>JWS ENCODE</h2>
        <form id="formDATA" action="{{ route('encode-jws') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="user-box">
                <input type="file" name="private_key_file">
                <label>Upload .txt with private key</label>
            </div>
            <div class="user-box">
                <textarea required="" name="json_data" id="jsonTextarea" rows="10"></textarea>
                <label>JSON</label>
            </div>
            <div onclick="generareJSON()" class="button_slide slide_right">Generate Random JSON </div>
            <br>
            <a id="submitBUTTON" href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                ENCODE
            </a>
        </form>
        @if(isset($token))
        <br />
        <div class="alert">
            <strong>Your json:</strong><br/>
            <code>{{ $json_data }}</code>
            <br/><br/>
            <strong>Token JWS generated successfuly:</strong>
            <code>{{ $token }}</code>
        </div>
        @endif
    </div>
    <!-- validarea json -->
    @if($errors->has('json_data'))
    <script>
        alert("{{ $errors->first('json_data') }}");
    </script>
    @endif
    <script>
        var form = document.getElementById("formDATA");
        document.getElementById("submitBUTTON").addEventListener("click", function () {
            form.submit();
        });

        function generareJSON() {
            const jsonObiect = {};
            const name_columns = ["age", "name", "city", "country", "gender", "occupation", "email", "phone", "address", "zipcode", "education", "salary", "hobby", "language", "interest", "website", "status", "company", "birthdate", "username", "skill", "project", "experience", "qualification", "timezone", "relationship", "pet", "favorite_color", "height", "weight", "blood_type", "zodiac_sign", "car", "sport", "food", "drink", "music_genre", "movie_genre", "book_genre", "social_media"];

            for (let i = 0; i < 5; i++) {
                const name_column = name_columns[Math.floor(Math.random() * 40)];
                jsonObiect[name_column] = Math.floor(Math.random() * 100) + 1;
            }

            const jsonText = JSON.stringify(jsonObiect, null, 2); // Adaugă parametrul de spațiere pentru a face JSON-ul ușor de citit
            document.getElementById('jsonTextarea').value = jsonText;
        }
    </script>

</body>

</html>