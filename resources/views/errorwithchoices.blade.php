@extends('layout')
@section('content')
    <div class='content'>
        <div class='alert alert-danger'>      
            <p>{{session('thereisproblem')}}</p>
            <p>Η επιλογή <b>{{session('problematicKey')}}</b> έχει επιλεχθεί <b>{{session('problematicValue')}}</b> φορές.</p>
            <p>Γυρίστε πίσω και Επιλέξτε έτσι ώστε η κάθε επιλογή σας να εμφανίζεται ΜΟΝΟ ΜΙΑ ΦΟΡΑ</p>
            <p>Μόνο το <b>0</b> μπορεί να επιλεγεί πολλές φορές. Επιλέγοντας 0 το συστημα θεωρεί οτι δεν θέλετε να επιλέξετε την Διεύθυνση/ΚΕΔΔΥ</p>
            <p> Eπιστρέψτε με το κουμπί ΠΙΣΩ του φυλλομετρητή σας στην προηγουμενη Φόρμα</p>               
        </div>
    </div>
@endsection
