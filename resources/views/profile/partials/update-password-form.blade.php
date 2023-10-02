<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <section >
        <!-- Ensure there's no container with constraints on width around the table -->
        <style>/* Basic button styling */
.custom-button {
    background-color: #59886b; /* Background color */
    color: #ffffff; /* Text color */
    padding: 10px 20px; /* Padding (top/bottom, left/right) */
    border: none; /* Remove border */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Cursor style on hover */
    font-size: 16px; /* Font size */
    text-align: center; /* Center text */
    text-decoration: none; /* Remove underlines */
    display: inline-block; /* Make the button an inline block */
    transition: background-color 0.3s ease; /* Smooth color transition on hover */
}

/* Button hover effect */
.custom-button:hover {
    background-color: #739680; /* New background color on hover */
}
</style>
        <form action="{{ route('viewpdf') }}/{{ Auth::user()->id }}" method="post" target="_blank" >
          @csrf
        
        <br>  <div>
        <h2 style="display: inline-block">Volunteering Programs</h2>
      
        <input type="submit" value="View as PDF" class="custom-button" style="margin-left: 85% ;position:relative ; bottom:55px" >
        </div>
        <table class="table" style="width: 100%">
            <thead style="background-color: rgb(179, 236, 164) ;">
              <tr>
                <th scope="col">Program Name</th>
                <th scope="col">Location</th>
                
                <th scope="col">Experiance</th>
                <th scope="col">CV file</th>
                <th scope="col">Donate</th>
                
              </tr>
            </thead>
            <tbody>
            {{-- @dd($filename) --}}
              @foreach ($volunteers as $item)
    
<tr>
       <td scope="col">{{ $item->Languages }}</td>
                <td scope="col">{{ $item->Address }}</td>
                <td scope="col">{{ $item->Experience }}</td>
                <td scope="col"><a href="{{ url('uplods/' . $item->CV) }}">Show file</a></td>

                {{-- <td scope="col">{{ $filename }}</td> --}}
                <td scope="col">{{ $item->day }}</td>
            
@endforeach
           
            <tr>

            </tr>
            
            </tbody>
          </table>

         
        </form>

    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>