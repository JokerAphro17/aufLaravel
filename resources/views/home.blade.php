@extends('layouts.app')

@section('content')
<div class="container justify-content-center align-content-center">
    <div class="row b1">
        <div class="col-md-6  offset-md-3 col-sm-12 text-light text-center demand">
            QUE VOULEZ-VOUS FAIRE ?
        </div>
    </div>
        <div class="container mt-5 bg-image">
            <div class="row justify-content-evenly ">
                <div class="col-md-3 col-lg-4 ">
                    <div class="card bg-warning w-100 c1">
                        <a href={{ route('inscription.index')
                        }}>
                            <img class="card-img-top " src={{asset('img/inscrip.webp')}} alt="Card image cap">
                        <div class="card-body text-center text-light">
                            <h5 class="card-title">AJOUTER UN ABONNES</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-4 ">
                    <div class="card bg-primary w-100 c2">
                        <a href="list.php">
                            <img class="card-img-top" src={{'img/liste.webp'}} alt="Card image cap" >
                        <div class="card-body text-center text-light">
                            <h5 class="card-title">GERER LES ABONNES</h5>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="text-center text-text mt-5" style="background-color: #f1f1f1;">
            <div class="text-center text-light p-3" style="background-color:#A90A2F;">
            © 2022 Copyright:

            </div>
        </footer>
</div>
<script>
     document.getElementById('alert') && setTimeout(()=>{ document.getElementById('alert').style.display = 'none';
            },3000);
            let logout = document.getElementById('logout');
            logout.addEventListener('click',(event)=>{
                if(confirm('Voulez-vous vraiment vous déconnecter ?'))
                {
                    return true;
                }
                else
                {   event.preventDefault();
                    return false;
                    
                }
            });
</script>
@endsection
