<x-app-layout>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<style>
    body {
      background-image: url('cool-background1.png');
      background-repeat: no-repeat;
      background-attachment: fixed;  
      background-size: cover;
    } 
    </style>
    <style>
            
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Float four columns side by side */
        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
        }

        /* Remove extra left and right margins, due to padding */
        .row {
            margin: 0 -5px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive columns */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <center> 
        <div class="card">
    @foreach($cities as $city) 
    <form action="/home" method="post"> 
        @csrf
        <input type="hidden" name="city_id" value={{$city->id}}>
        <input type="submit" value={{$city->city_name}}>
    </form>
    @endforeach 
</div>
</center>
</body>
</html>
</x-app-layout>