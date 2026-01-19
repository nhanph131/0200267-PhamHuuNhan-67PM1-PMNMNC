<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Chess</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 40px;
            height: 40px;
            border: 1px solid #333;
        }
    </style>
</head>
<body>
    @php
        $row_color = 0;
        $col_color = 0;
    @endphp

    <table>
        @for ($i = 0; $i < $size; $i++)
            <tr>
                @php
                    $col_color = $row_color;
                @endphp
                @for ($j = 0; $j < $size; $j++)
                    <td style="background-color: {{ $col_color % 2 == 0 ? 'black' : 'aquamarine' }};"></td>
                    @php
                        $col_color++; 
                    @endphp
                @endfor
                @php
                    $row_color++;
                @endphp
            </tr>
        @endfor
    </table>

    <br>
    <a href="{{ route('home') }}">Trang chủ</a>

</body>
</html>
