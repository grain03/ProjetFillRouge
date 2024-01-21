@extends('layouts.layout')
@section('content')


<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Inscrivez vous</h1>
            </div>
        </div>
    </div>
</section>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header"></div>
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nom</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Nom">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Prénom</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Prénom">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">الاسم الشخصي</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Prénom en Arabe">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">الاسم العائلي</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Nom en Arabe">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Genre</label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input"  id='male' type="radio" name="radio1">
                                        <label class="form-check-label" for='male'>Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input"  id='femme' type="radio" name="radio1">
                                        <label class="form-check-label"  for='femme'>Femme</label>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">CIN</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter CIN">
                            </div>



                            <div class="form-group">
                                <label for="exampleInputEmail1">Numéro de téléphone</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Numéro de téléphone">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Adresse Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Adresse Email">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Ville</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Ville">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Adresse</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Adresse">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Date de naissance</label>
                                <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter Date de naissance">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Lieu de naissance</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Lieu de naissance">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Niveau Scholaire</label>
                                <select class="form-control" id="exampleInputEmail1" >
                                    <option value="default" disabled>Niveau Scholaire</option>
                                    <option value="">Bac+1</option>
                                    <option value="">Baccalaurete</option>
                                    <option value="">6ème</option>
                                    <option value="">5ème</option>
                                    <option value="">4ème</option>
                                    <option value="">Autre</option>
                                </select>                            
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Filières</label>
                                <select class="form-control" id="exampleInputEmail1" >
                                    <option value="default" disabled>choisir filière</option>
                                    <option value="dwb">Development Web</option>
                                    <option value="dmb">Develepment Mobile</option>
                                </select>
                            </div>

                        </div>  
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection