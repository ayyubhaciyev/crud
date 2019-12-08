let isci = [];
    $(document).ready(function(){
        $('select').formSelect();
      });
  
       $(document).ready(function(){
          $('.modal').modal();
        });
     function Sil(id) {
          swal({
        title: "Əminsinizmi?",
        text: "Silinən məlumatlar geri qaytarılmır!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr!", "Bəli!"],
      })
      .then((willDelete) => {
        if (willDelete) {
         location.href = `index.php?sil=ok&id=${id}`;
  
        } else {
          swal("İmtina Edildi!");
        }
      });
     }
  
    

     function Getir(id,eid) {
      isci = [];
         for(let i = 1 ; i<=8;i++){
            if(i==7) continue;
             isci.push(document.getElementsByClassName("data")[id].getElementsByTagName("td")[i].textContent);
         }
         console.log(isci)
         RGetir(eid);
     }

     function RGetir(eid) {
         document.getElementById("radsoyad").value = isci[0];
         document.getElementById("rvezife").value = isci[1];
         document.getElementById("rmaas").value = isci[2].match(/\d+/g);
         document.getElementById("rtel").value = isci[4];
         document.getElementById("remail").value = isci[5];
         document.getElementsByName("id")[0].value = eid;
         //av
         let avv = ["Subay","Evli"];
         let av = ``;
         let cav = isci[3];
         let slc = `checked="checked"`;
         for(let i = 0; i<=1;i++){
         av += `<p><label><input name="av" type="radio" value="${i}" ${avv[i]==cav ? slc : ""} ><span>${avv[i]}</span></label></p>`;
         }
         document.getElementById("rav").innerHTML = av;
         //is

         let isv = ["İşləyir","İşləmir"];
         let is = ``;
         let cis = isci[6];
         for(let i = 0; i<=1;i++){
          is += `<p><label><input name="is" type="radio" value="${i}" ${isv[i]==cis ? slc : ""} ><span>${isv[i]}</span></label></p>`;
         }
         document.getElementById("ris").innerHTML = is;

     }
  