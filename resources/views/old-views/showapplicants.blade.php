@extends('layout')
@section('content')
    <div class="content">
              <h1>Όλοι οι Υποψήφιοι Αναπληρωτές</h1>
              
                <table class='table table-striped'>
                <thead>
                    <tr>
                        <td>Επώνυμο</td><td>Όνομα</td>
                        <td>Κλάδος</td><td>Πίνακας</td>
                    </tr>
                </thead>    
                <tbody>    
                    @foreach($Applicants as $Applicant)
                    <tr >
                        <td >{{$Applicant->surname}}</td><td>{{$Applicant->name}}</td>
                        <td>{{$Applicant->klados}}</td><td>{{$Applicant->katigoria_pinaka}}</td>
                    </tr>    
                    @endforeach
                    
                </tbody>
                </table>
    </div>
@endsection
