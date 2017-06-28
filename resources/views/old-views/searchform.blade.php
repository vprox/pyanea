@extends('layout')
@section('content')
    <div>
             
                <h2>Φόρμα Αναζήτησης Υποψήφιων Αναπληρωτών ΠΔΕ Αττικής</h2>      
                <p>Αναζητήστε τις προτιμήσεις σας χρησιμοποιώντας τον ΑΦΜ σας και τον ΑΣΤ (ή Αριθμό Διαβατηρίου) που είχατε δηλώσει στην αίτηση σας. </p>
                <div class='well' style='margin:auto; width:70%'>
                <form method='post' action='{{ route('Search') }}' >
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="afm">ΑΦΜ:</label>
                    <input type="text" class="form-control" name="afm" >
                </div>
                <div class="form-group">
                    <label for="at">ΑΤ:</label>
                    <input type="text" class="form-control" name="at">
                </div>
                <button type="submit" class="btn btn-success">Αναζήτηση</button>
                <a href='{{ route('Searchform') }}'><button type="button" class="btn btn-primary" >Καθαρισμός</button></a>
                </form> 
                </div>
                
    </div>
@endsection
