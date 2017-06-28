@extends('layout')
@section('content')
        <?php $message='Δεν έχει Επιλεχθεί'; ?>
        <div class="content">
                

                <div class="container">              
                            <h1>Δηλωθείσες Προτιμήσεις Υποψήφιου Αναπληρωτή {{$Applicant->klados}}</h1>
                            <h2>{{$Applicant->surname}} &nbsp; {{$Applicant->name}}</h2>
                            
                            <h3>Όνομα Πατρός: {{$Applicant->fathername}}  </h3>
                            
                            <h3>ΑΦΜ: {{$Applicant->afm}} &nbsp; ΑΔΤ|ΑΔ: <span>{{$Applicant->at}}</span></h3>
                    
                            <div> 
                            @if($Applicant->klados <>'ΕΒΠ')

                            κατηγορία πίνακα: {{$Applicant->katigoria_pinaka}}
                            @endif
                            
                            </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Διευθύνσεις</th>
                                <th><b>Σειρά προτίμησης</b></th>     
                            @if($Applicant->klados <>'ΕΒΠ')    
                                <th>ΚΕΔΔΥ</th>
                                <th><b>Σειρά προτίμησης</b></th>
                            @endif
                            </tr>
                        </thead>
                        <tbody>
                            <tr class='info'>
                                <td>Α' Αθήνας</td>
                                <td><b>
                                @if($Applicant->aathinas<>0)
                                    {{$Applicant->aathinas}}
                                @else
                                    <?php  echo $message; ?>
                                @endif
                                </b> </td>
                            @if($Applicant->klados <>'ΕΒΠ')
                                <td>ΚΕΔΔΥ Α' Αθήνας</td>
                                <td><b>
                                @if($Applicant->keddyaathinas<>0)
                                    {{$Applicant->keddyaathinas}}
                                @else
                                    <?php  echo $message; ?>
                                @endif
                                </b></td>
                            @endif
                        </tr> 
                            <tr class='warning'>
                                <td>Β' Αθήνας</td>
                                <td><b>
                                @if($Applicant->bathinas<>0)
                                    {{$Applicant->bathinas}}
                                @else
                                    <?php  echo $message; ?>
                                @endif
                                </b></td>
                            @if($Applicant->klados <>'ΕΒΠ')
                                <td>ΚΕΔΔΥ Β' Αθήνας</td>
                                <td><b>
                                @if($Applicant->keddybathinas<>0)
                                    {{$Applicant->keddybathinas}}
                                @else
                                    <?php  echo $message; ?>
                                @endif
                                </b></td>
                            @endif
                            </tr>       
                            <tr class="success">
                                <td>Γ' Αθήνας</td>
                                <td><b>
                                @if($Applicant->cathinas<>0)
                                    {{$Applicant->cathinas}}
                                @else
                                    <?php  echo $message; ?>
                                @endif
                                </b></td>
                            @if($Applicant->klados <>'ΕΒΠ')
                                <td>ΚΕΔΔΥ Γ' Αθήνας</td>
                                <td><b>
                                @if($Applicant->keddycathinas<>0)
                                    {{$Applicant->keddycathinas}}
                                @else
                                    <?php  echo $message; ?>
                                @endif
                                </b></td>
                            @endif
                            </tr>
                            <tr class='info'>
                                <td>Δ' Αθήνας</td>
                                <td><b>
                                @if($Applicant->dathinas<>0)
                                    {{$Applicant->dathinas}}
                                @else
                                    <?php  echo $message; ?>
                                @endif
                                </b></td>
                            @if($Applicant->klados <>'ΕΒΠ')
                                <td>ΚΕΔΔΥ Δ' Αθήνας</td>
                                <td><b>
                                @if($Applicant->keddydathinas<>0)
                                    {{$Applicant->keddydathinas}}
                                @else
                                    <?php  echo $message; ?>
                                @endif
                                </b></td>
                            @endif
                            </tr> 
                            <tr class='warning'>
                                <td>Ανατολικής Αττικής</td>
                                <td><b>
                                @if($Applicant->anatolikiattiki<>0)
                                    {{$Applicant->anatolikiattiki}}
                                @else
                                    <?php  echo $message; ?>
                                @endif
                                </b></td>
                            @if($Applicant->klados <>'ΕΒΠ')
                                <td>ΚΕΔΔΥ Ανατολικής Αττικής</td>
                                <td><b>
                                @if($Applicant->keddyanatolikiattiki<>0)
                                    {{$Applicant->keddyanatolikiattiki}}
                                @else
                                    <?php  echo $message; ?>
                                @endif
                                </b></td>
                            @endif
                            </tr>       
                            <tr class="success">
                                <td>Δυτικής Αττικής</td>
                                <td><b>
                                @if($Applicant->ditikiattiki<>0)
                                    {{$Applicant->ditikiattiki}}
                                @else
                                    <?php  echo $message; ?>
                                @endif
                                </b></td>
                            @if($Applicant->klados <>'ΕΒΠ')    
                                <td>ΚΕΔΔΥ Δυτικής Αττικής</td>
                                <td><b>
                                @if($Applicant->keddyditikiattiki<>0)
                                    {{$Applicant->keddyditikiattiki}}
                                @else
                                    <?php  echo $message; ?>
                                @endif
                                </b></td>
                            @endif    
                            </tr>
                            <tr class='info'>
                                <td>Πειραιάς</td>
                                <td><b>
                                @if($Applicant->peiraias<>0)
                                    {{$Applicant->peiraias}}
                                @else
                                    <?php  echo $message; ?>
                                @endif
                                </b></td>
                            @if($Applicant->klados <>'ΕΒΠ')
                                <td>ΚΕΔΔΥ Πειραιά</td>
                                <td><b>
                                @if($Applicant->keddypeiraias<>0)
                                    {{$Applicant->keddypeiraias}}
                                @else
                                    <?php  echo $message; ?>
                                @endif
                                </b></td>
                            @endif
                            </tr> 
                        </tbody>
                     </table>
                    
                    <form method='post' action='{{ route('Editchoices') }}'>
                    {{ csrf_field() }}
                    
                        <button type='submit' class='btn btn-default'> 
                            <span class="glyphicon glyphicon-edit" aria-hidden="true"> Διόρθωση</span>
                        </button>
                        <input name='applicant_id' type='hidden' value="{{ $Applicant->id}}">
                   <a href='{{ route('Searchform') }}'>
                        <button type='button' class='btn btn-default'> 
                            <span class="glyphicon glyphicon-search" aria-hidden="true"> Νέα Αναζήτηση</span>
                        </button>
                    </a>
                    </form>
                    
                </div>
            </div>
@endsection
