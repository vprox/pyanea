@extends('layout')
@section('content')
        
                
        @if($Applicant->klados == 'ΕΒΠ') 
            
        	@include('form-ebp-branch') 

        @else     

            @include('form-other-branch')

        @endif                      



        
@endsection
