@extends('layout')
@section('content')
    <div >
              <div style='text-align:center'>
                    <a href='{{ url('/')}}'>
                        <button type='button' class='btn btn-primary'> 
                                    <span class="glyphicon glyphicon-home" aria-hidden="true"> </span>
                        </button>
                    </a>
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
                    </tr>    
                    @endforeach
                    
                </tbody>
                </table>
    </div>

@endsection
