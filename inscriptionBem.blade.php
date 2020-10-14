<div class="col-md-8 order-md-1">
    <form action='/inscription/bac' method='post' class="needs-validation" novalidate="">
@csrf
      <div class="row">
        <div class="col-md-6 mb-3">  
            <label for="nom">nom</label>
            <input name="nom" type="text" class="form-control" id="nom" placeholder="" value="" required="">
            @error('nom')
            <p>{{$message}}</p>
          @enderror
          <br>
            <label for="prenom">prénom</label>
            <input name="prenom" type="text" class="form-control" id="prenom" placeholder="" value="" required="">
            @error('prenom')
            <p>{{$message}}</p>
          @enderror
          <br>
            <label for="dn">date de naissance</label>
        <input name="dn" type="date" class="form-control" id="dn" placeholder="" value="" required="">
        @error('dn')
        <p>{{$message}}</p>
      @enderror
      <br>
      <label for="ln">lieux de naissance</label>
      <select name="wilaya">
          @foreach ($wilayas as $wilaya)
              <option value="{{$wilaya->id}}">{{$wilaya->nom}}</option>
          @endforeach
      </select> @error('wilaya')
      <p>{{$message}}</p>
    @enderror
      <input name="ln" type="text" class="form-control" id="ln" placeholder="" value="" required="">
      @error('ln')
      <p>{{$message}}</p>
    @enderror
    <br>
    <label for="prenom_p">prénom pére</label>
    <input name="prenom_p" type="text" class="form-control" id="prenom_p" placeholder="" value="" required="">
    @error('prenom_p')
    <p>{{$message}}</p>
  @enderror
  <br>
  <label for="nom_m">nom mére</label>
  <input name="nom_m" type="text" class="form-control" id="nom_m" placeholder="" value="" required="">
  @error('nom_m')
  <p>{{$message}}</p>
@enderror
<br>
<label for="prenom_m">prénom mére</label>
<input name="prenom_m" type="text" class="form-control" id="prenom_m" placeholder="" value="" required="">
@error('prenom_m')
<p>{{$message}}</p>
@enderror
<br>

        
         
          <label for="region"> choisir une région</label>
          <select name="region" class="form-control" id="region" placeholder="" value="" required=""><br>
              @foreach ($regions as $region)
                  <option value="{{$region->id}}"> {{$region->nom}} </option>
              @endforeach

          </select>
          @error('region')
          <p>{{$message}}</p>
        @enderror
        <br>
        <label for="wilaya"> choisir une wilaya</label>
        <select name="wilaya">
            @foreach ($wilayas as $wilaya)
                <option value="{{$wilaya->id}}">{{$wilaya->nom}}</option>
            @endforeach
        </select> @error('wilaya')
        <p>{{$message}}</p>
      @enderror 
      <br>
      <label for="commune"> choisir une commune</label>
        <select name="commune">
            @foreach ($communes as $commune)
                <option value="{{$commune->id}}">{{$commune->nom}}</option>
            @endforeach
        </select> @error('commune')
        <p>{{$message}}</p>
      @enderror 
      <br>
      <label for="cem"> choisir un Cem</label>
        <select name="cem">
            @foreach ($cems as $cem)
                <option value="{{$cem->id}}">{{$cem->nom}}</option>
            @endforeach
        </select> @error('cem')
        <p>{{$message}}</p>
      @enderror 
      <br>
      
       
              
  
    
          <label for="nar">nom-arabe</label>
          <input name="nar" type="text" class="form-control" id="nar" placeholder="" value="" required="">
          @error('nar')
          <p>{{$message}}</p>
        @enderror<br>

          <label for="par">prénom-arabe</label>
          <input name="par" type="text" class="form-control" id="par" placeholder="" value="" required=""><br>
          @error('par')
            <p>{{$message}}</p>
          @enderror
          <label for="num_carte_nationale">numéro carte nationale</label>
          <input name="num_carte_nationale" type="text" class="form-control" id="num_carte_nationale" placeholder="" value="" required=""><br>

        </div>
       <button type="submit">okk</button>

    </form>
</div>