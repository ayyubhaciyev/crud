<?php


class CRUD
{

  public function Insert($post)
  {
    global $db;
    $ins = $db->prepare("INSERT into isciler set

      AdSoyad=:y,
      Vezife=:kreslo,
      Maas=:Maas,
      av=:av,
      email=:email,
      tel=:tel,
      qeyd_tarixi=:qeyd_tarixi
    ");
    $elv = $ins->execute([
      'y'=>$post["x"],
      'kreslo'=>$post["vezife"],
      'Maas'=>$post["maas"],
      'av'=>$post["av"],
      'email'=>$post["email"],
      'tel'=>$post["tel"],
      'qeyd_tarixi'=>date("Y-m-d H:i:s"),
    ]);

    return $elv ? 1 : 0;

  }

  public function Update($post)
  {
    global $db;
    $ins = $db->prepare("UPDATE  isciler set

      AdSoyad=:y,
      Vezife=:kreslo,
      Maas=:Maas,
      av=:av,
      email=:email,
      tel=:tel,
      status=:statuss
      where id=:id
    ");
    $dys = $ins->execute([
      'y'=>$post["x"],
      'kreslo'=>$post["vezife"],
      'Maas'=>$post["maas"],
      'av'=>$post["av"],
      'email'=>$post["email"],
      'tel'=>$post["tel"],
      'statuss'=>$post["is"],
      'id'=>$post['id']
    ]);

    return $dys ? 1 : 0;

  }

  public function Select()
  {
    global $db;
    $slc = $db->prepare("SELECT * from isciler");
    $slc->execute();
    $arr = [];
    while($isci = $slc->fetch(PDO::FETCH_ASSOC)){
     array_push($arr,$isci);
    }
    return $arr;
  }
  public function Delete($id)
  {
     global $db;
     $dlt = $db->prepare("DELETE from isciler where id={$id}");
     return $dlt->execute() ? 1 : 0;
  }

}



 ?>
