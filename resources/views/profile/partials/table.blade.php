             <center><img src="https://media.discordapp.net/attachments/1149330077880942705/1151770919937781760/codemates-logo__1_-removebg-preview_1.png?width=721&height=541" alt="">
</center> 
   
   <table class="table" style="width: 100%">
            <thead style="background-color: #59886b;">
              <tr>
                <th scope="col">Program Name</th>
                <th scope="col">Location</th>
                <th scope="col">Experiance</th>
                <th scope="col">CV file</th>
                <th scope="col">Donate</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach ($volunteers as $item)
    
<tr>
       <td scope="col">{{ $item->Languages }}</td>
                <td scope="col">{{ $item->Address }}</td>
                <td scope="col">{{ $item->Experience }}</td>
                <td scope="col"><a href="{{ url('uploads/' . $item->CV) }}">Show file</a></td>
                {{-- <a href="{{url('/campaignPdf/' . $pendingcampaign->auth_file)}}" target="_blank" class="btn btn-primary">Show File</a> --}}
                <td></td>
                <td scope="col">{{ $item->day }}</td>
            
@endforeach
            <tr>

            </tr>
            
             {{-- @foreach ($volunteers as $program)
                <tr>
                    <td>{{ $program->Languages }}</td>
                    <td>{{ $program->Address }}</td>
                    <td>{{ $program->Experiance }}</td>
                    <td>{{ $program->CV }}</td>
            
                </tr>
            @endforeach 
          --}}
            </tbody>
          </table>