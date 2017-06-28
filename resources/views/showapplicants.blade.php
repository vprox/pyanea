@extends('layout')
@section('content')
    
    <div >
              <div style='text-align:center'>
                    <div style='text-align:center'>
                    <a href='{{ url('/')}}'> <i class="w3-xxlarge w3-spin fa fa-home"></i>
                        
                    </a>
                </div>
                </div>
              <h1>Όλοι οι Υποψήφιοι Αναπληρωτές κλάδου: {{$klados}}</h1>
              
                <table class='table table-striped'>
                <thead>
                    <tr>
                        <td>Επώνυμο</td>
                        <td>Όνομα</td>
                        <td>Πατρώνυμο</td>
                        <td>Κλάδος</td>
                    @if($klados<>'ΕΒΠ')
                        <td>Πίνακας</td>
                    @endif
                        <!-- <td>Κατάταξη</td> -->
                        <td>Έχει ενημερωθεί/επεξεργαστεί</td>
                        
                    </tr>
                </thead>    
                <tbody>    
                    @foreach($Applicants as $Applicant)
                    <tr >
                        <td >{{$Applicant->surname}}</td>
                        <td>{{$Applicant->name}}</td>
                        <td>{{$Applicant->fathername}}</td>
                        <td>{{$Applicant->klados}}</td>
                    @if($klados<>'ΕΒΠ')    
                        <td>{{$Applicant->katigoria_pinaka}}</td>
                    @endif    
                        <!-- <td>{{$Applicant->aa}}</td> -->

                    @if($Applicant->updated_at > "2017-06-20 00:00:00")
                        <td><img src='/Ok-icon.png' title='Έχει επεξεργαστεί {{ date_format($Applicant->updated_at,'d/m/Y H:i:s')  }}' ></td>    
                    @else
                        <td><img src='/Hourglass-icon.png' title='Δεν έγινε ακόμη επεξεργασία'></td>
                    @endif  

                    </tr>    
                    @endforeach
                    
                </tbody>
                </table>
    </div>

@endsection
