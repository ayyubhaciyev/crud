<?php require_once 'header.php'; ?>
<main class="">
  <table>
    <thead>
      <tr>
        <th>S.N</th>
        <th>Ad Soyad</th>
        <th>Vəzifə</th>
        <th>Maaş</th>
        <th>Ailə Vəziyyəti</th>
        <th>Telefon</th>
        <th>Email</th>
        <th>Qeydiyyat Tarixi</th>
        <th>Status</th>
        <th>Əməliyyatlar</th>
      </tr>
    </thead>

    <tbody>
      <?php $i = 1;
      foreach ($isciler as $isci) { ?>
        <tr class="data">
          <td><?= $i++ ?></td>
          <td><?= $isci["AdSoyad"] ?></td>
          <td><?= $isci["Vezife"] ?></td>
          <td><?= $isci["Maas"] ?> AZN</td>
          <td><?= $isci["av"] == 1 ? 'Evli' : 'Subay' ?></td>
          <td><?= $isci["tel"] ?></td>
          <td><?= $isci["email"] ?></td>
          <td><?= substr($isci["qeyd_tarixi"], 0, 10) ?></td>
          <td><?= $isci['status'] == 1 ? 'İşləyir' : 'İşləmir' ?></td>
          <td>
            <a onclick="Getir(<?= $i - 2 ?>,<?= $isci['id'] ?>)" class="waves-effect waves-light btn modal-trigger" href="#modal1"><i class="material-icons">edit</i></a>
            <a onclick="Sil(<?= $isci['id'] ?>)" style="background-color: red;" class="waves-effect waves-light btn"><i class="material-icons">delete</i></a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</main>
<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>İşçinin məlumatlarının yenilənməsi</h4>
    <div class="row">
      <form method="POST" action="#" class="col s12">
        <input type="hidden" name="id" value="" />
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input id="radsoyad" name="x" type="text" class="validate">
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">work</i>
            <input id="rvezife" name="vezife" type="text" class="validate">
          </div>

          <div class="input-field col s12">
            <i class="material-icons prefix">attach_money</i>
            <input id="rmaas" name="maas" type="number" class="validate">
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12" id="rav" >
          </div>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="rtel" name="tel" type="tel" class="validate">
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input id="remail" name="email" type="email" class="validate">
        </div>
        <div class="row">
        <div class="input-field col s12" id="ris" >
          </div>
        </div>
        <button name="redakte" class="waves-effect waves-light btn"><i class="material-icons right">add</i>Redaktə Et</button>

      </form>

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Bağla</a>
    </div>
  </div>
  <?php require_once 'footer.php'; ?>