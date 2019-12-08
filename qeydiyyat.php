<?php require_once 'header.php'; ?>
<main class="container">
  <div class="row">
      <form method="POST" action="#" class="col s12">
        <div class="row">
          <div class="input-field col s4">
            <i class="material-icons prefix">account_circle</i>
            <input id="adsoyad" name="x" type="text" class="validate">
            <label for="adsoyad">Ad Soyad</label>
          </div>
          <div class="input-field col s4">
            <i class="material-icons prefix">phone</i>
            <input id="tel" name="tel" type="tel" class="validate">
            <label for="tel">Telefon</label>
          </div>
          <div class="input-field col s4">
            <i class="material-icons prefix">email</i>
            <input id="email" name="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">work</i>
            <input id="vezife" name="vezife" type="text" class="validate">
            <label for="vezife">Vəzifə</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">attach_money</i>
            <input id="maas" name="maas" type="number" class="validate">
            <label for="maas">Maaş</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
          <select name="av">
           <option value="" disabled selected>Seçim Edin</option>
           <option value="1">Evli</option>
           <option value="0">Subay</option>
         </select>
         <label>Ailə Vəziyyəti</label>
          </div>
          <button name="elaveet" class="waves-effect waves-light btn"><i class="material-icons right">add</i>Əlavə Et</button>

        </div>
      </form>
    </div>
</main>
<?php require_once 'footer.php'; ?>
