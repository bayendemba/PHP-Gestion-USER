function confirmer(url){
    var bool = confirm("Etes - vous sure de vouloir supprimer cet user ?");
    if(bool == true)
        document.location = url;

}