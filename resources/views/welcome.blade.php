<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Larevalo</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    </head>
    <body class="font-sans antialiased dark:bg-white dark:text-black/50">
        <div class="relative flex items-top justify-center">
        <h1>Welcome to the to-do list </h1>
        
        </br>
        @foreach ( $todoItems as $todoItem)

        <p>
            item: {{ $todoItem->name }}
            
            <!-- &nbsp; -->
            <form  action="{{ route('markItemComplete') }}" method="post">
            @csrf
            

            
            <button type="submit" name="itemId" value="{{ $todoItem->id }}">Mark as Completed</button>
            </form>

            
            
            <form  action="{{ route('deleteItem') }}" method="post">
                @csrf
            <button type="submit" name="itemId" value="{{ $todoItem->id }}">Delete Item</button>
            </form>
        </p>
        <br/>
            
        @endforeach
        </br>
        <form  action="{{ route('saveItem') }}" method="post">

            @csrf
            
            <label for="listItem"></label></br>
            <input type="text" id="listItem" name="listItem"/>
            </br>
            <button type="submit">Save</button>
        </form>
        </div>
    </body>
</html>
