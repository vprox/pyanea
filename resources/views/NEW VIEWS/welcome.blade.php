@extends('layout')
@section('content')
            <?php $prothesmia='30 Ιουνίου 2017 ώρα: 24:00' ?>
            <div class="content">
              <!--   <div class="title ">
                    Υποψήφιοι Αναπληρωτές Ειδικής Αγωγής ΠΔΕ Αττικής
                </div> -->
                <div class="w3-panel w3-green w3-round">
                <h2><em>Π</em>ροτιμήσεις <em>Υ</em>ποψήφιων <em>ΑΝ</em>απληρωτών <em>Ε</em>ιδικής <em>Α</em>γωγής</h2>
                </div>
                <div class="jumbotron w3-panel w3-orange">
                      
                    Απο το site αυτό μπορείτε:
                    <ul>
                        <li>Να δείτε όλους τους Υποψήφιους Αναπληρωτές ανα κλάδο</li>
                        <li><b>Να πληροφορηθείτε για τις προτιμήσεις σας ως υποψήφιοι Αναπληρωτές Ειδικής Αγωγής ΠΔΕ Αττικής</b></li>
                        <li><b>Να τροποποιήσετε τις προτιμήσεις σας όσες φορές θέλετε μέχρι: <span style='color:red'><em>{{$prothesmia}}</em></span></b></li>
                        <li>Να κατεβάσετε το κατάλληλο έντυπο δηλωσης Προτιμήσεων σε περίπτωση που δεν μπορείτε 
                        να βρείτε τις Προτιμήσεις σας χρησιμοποιώντας την Φόρμα Αναζήτησης</li>
                    </ul>
               
              </div>
                
                  <div class='btn-group dropdown'>  
                    <button type="button" class="btn btn-primary btn-md dropdown-toggle w3 fa fa-male" data-toggle="dropdown"> 
                        Υποψήφιοι Αναπληρωτές <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">                      
                            <li class='dropdown-header'>Ειδικό Επιστημονικό Προσωπικό</li>
                            <li><a href='{{ route('Applicants',['klados'=>'ΠΕ21-26']) }}' >ΠΕ21-26</a></li>
                            <li><a href='{{ route('Applicants',['klados'=>'ΠΕ22']) }}' >ΠΕ22</a></li>
                            <li><a href='{{ route('Applicants',['klados'=>'ΠΕ23']) }}' >ΠΕ23</a></li>
                            <li><a href='{{ route('Applicants',['klados'=>'ΠΕ24']) }}' >ΠΕ24</a></li>
                            <li><a href='{{ route('Applicants',['klados'=>'ΠΕ25']) }}' >ΠΕ25</a></li>
                            <li><a href='{{ route('Applicants',['klados'=>'ΠΕ28']) }}' >ΠΕ28</a></li>
                            <li><a href='{{ route('Applicants',['klados'=>'ΠΕ29']) }}' >ΠΕ29</a></li>
                            <li><a href='{{ route('Applicants',['klados'=>'ΠΕ30']) }}' >ΠΕ30</a></li>
                            <li class='dropdown-header'>Ειδικό Βοηθητικό Προσωπικό</li>
                            <li><a href='{{ route('Applicants',['klados'=>'ΕΒΠ']) }}' >ΕΒΠ</a></li> 
                        </ul>
                   </div>
                <div class="w3-panel w3-blue w3-round"> 
                 <p>Αναζητήστε τις προτιμήσεις σας χρησιμοποιώντας τον ΑΦΜ σας και τον ΑΤ (ή Αριθμό Διαβατηρίου) που είχατε δηλώσει στην αίτηση σας. </p>     
                   <div class='btn-group'>
                        <a href='{{ route('Searchform') }}'>
                        <button type='button' class='btn btn-danger btn-md'><i class='w3-large fa fa-search '> </i>Φόρμα Αναζήτησης</button>
                        </a>
                        <p></p>
                    </div>
                </div>  
                    <div class='well wellcolor w3-panel w3-yellow'>
                            <div><span class='glyphicon glyphicon-info-sign lg'> </span>Σε περίπτωση που δεν μπορέσετε να βρείτε το όνομα σας και να δείτε τις επιλογές σας, 
                    κατεβάστε & συμπληρώστε το κατάλληλο απο τα <b style='color:red'>Έντυπα Δήλωσης Προτιμήσεων</b>
                        <!-- <button type='button' class='btn btn-info glyphicon glyphicon-download'> -->
                            <div class='btn-group dropdown'>    
                               <button type="button" class="btn btn-info dropdown-toggle w3 fa fa-file" data-toggle="dropdown">
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu">
                                    <li><a href='Έντυπο Δηλωσης Προτιμήσεων-ΕΕΠ.doc'>Έντυπο Δήλωσης Προτιμήσεωv για ΕΕΠ</a></li>
                                    <li><a href='Έντυπο Δηλωσης Προτιμήσεων-ΕΒΠ.doc'>Έντυπο Δήλωσης Προτιμήσεων για ΕΒΠ</a></li>

                                    </ul>
                            </div>
                        <!-- </button> -->
                     και αποστείλετε το στο <b>e-mail</b>
                    <a href='mailto:pliroforikh.pde.attik@gmail.com'><span class='glyphicon glyphicon-envelope w3-spin w3-xlarge fa fa-email' ></span></a> 
                    με θέμα:<br> <b><<</b>ΔΗΛΩΣΗ ΠΡΟΤΙΜΗΣΕΩΝ ΟΝΟΜΑΤΕΠΩΝΥΜΟ του ΠΑΤΡΩΝΥΜΟ-ΚΛΑΔΟΣ<b>>></b>, <br>
                    για π.χ<br> <b><<</b>ΔΗΛΩΣΗ ΠΡΟΤΙΜΉΣΕΩΝ-ΠΑΠΑΔΟΠΟΥΛΟΣ ΑΡΙΣΤΟΦΑΝΗΣ του ΓΕΩΡΓΙΟΥ-ΕΕΠ-ΠΕ<b>26</b><b>>></b> 
                    <br>μέχρι: <b style='color:red'>{{$prothesmia}}</b>
                            </div>
                    
                    </div>
                    

            </div>

@endsection