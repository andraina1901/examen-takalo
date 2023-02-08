
<main id="accueil">
    <div class="main-left">
        <div class="category">
            <div class="col-lg-3">
                <h1 class="h2 pb-4">Categories</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <?php for ($i=0; $i < count($category) ; $i++) { ?>
                        <li class="pb-3">
                            <a id="category" class="lien collapsed d-flex justify-content-between h3 text-decoration-none" value=<?php echo $category[$i]['idcategory'];?> href="#">
                                <?php echo $category[$i]['nomcategory'];?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="main-right">
    <div class="row" id ="row">
        <p></p>
    </div>
</main>
<script>
    function getTheBoy() {
  let xhr;
  try {
    xhr = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
    try {
      xhr = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (e2) {
      try {
        xhr = new XMLHttpRequest();
      } catch (e3) {
        xhr = false;
      }
    }
  }
  return xhr;
}

const liens = document.querySelectorAll(".lien");
console.log(liens);
liens.forEach((lien) =>{
lien.addEventListener("click",()=>{
    getObjectByCategory(lien.getAttribute("value"));
    
});    
});

function getObjectByCategory(id) {
  let xhr = getTheBoy();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4) {
      if (xhr.status == 200) {
        // alert(xhr.responseText);
        var retour = JSON.parse(xhr.responseText);
        // alert(retour);
        var row = document.getElementById("row");
        var string = "";
        for (let index = 0; index < retour.length; index++) {
            string +=`<div class="col-md-4">
                <div class="card mb-4 product-wap rounded-0">
                    <div class="card rounded-0">
                        <img id="imitem" class="card-img rounded-0 img-fluid" src="<?php echo site_url();?>assets/img/`+retour[index]['nomobjet']+`.jpg">
                    </div>
                    <div class="card-body">
                        <a href="shop-single.html" class="h3 text-decoration-none">`+retour[index]['nomobjet']+`</a>
                        <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                            <li class="pt-2">
                                <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                            </li>
                        </ul>
                        <p class="text-center mb-0">`+retour[index]['prixestimatif']+`$</p>
                        <a type="submit" id="button" href=<?php echo site_url();?>echange/effectuerEchange/`+retour[index]['idobjectuser']+`>Echanger</a> 
                    </div>
                </div>
            </div> `;
        }

        row.innerHTML = string;
        if (retour.state == "error") {
          console.log("Erreur");
        } else {
        }
      } else {
        console.log(xhr.status);
      }
    }
  };
  xhr.addEventListener("error", function (event) {
    alert("Oups! Quelque chose s'est mal passé lors de la publication .");
  });

  xhr.open("POST", `<?php echo base_url();?>categorie/getObjets/${id}`, true);
  xhr.send(null);
}
</script>

