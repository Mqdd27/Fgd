<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Number dengan Format 0000</title>
    <style>
        input[type="text"] {
            width: 80px;
            text-align: right;
            font-family: monospace;
            /* Untuk memastikan tampilan angka seragam */
        }

        input[type="text"]::placeholder {
            color: gray;
        }
    </style>
</head>

<body>
    <form>
        <label for="numberInput">Masukkan angka (0000): </label>
        <input type="text" id="numberInput" name="numberInput" placeholder="0000" pattern="\d{4}"
            title="Masukkan angka 4 digit (0000)" required />
        <button type="submit">Kirim</button>
    </form>
</body>

</html>
