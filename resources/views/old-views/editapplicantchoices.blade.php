@extends('layout')
@section('content')
        
                
        @if($Applicant->klados == 'ΕΒΠ')
            
            @include('form-ebp-branch-options')

        @else     

            @include('form-other-branch')

        @endif                     



        
@endsection
