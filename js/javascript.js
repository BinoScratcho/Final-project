function confirmDeleteArticle(id) {
    if (confirm("Voulez-vous supprimer ?")) {
        window.location.href = "./delete_article.php?id=" + id;
    } else {
        (alert("annuler"))
    }
}

function confirmDeleteUsers(id) {
    if (confirm("Voulez-vous supprimer ?")) {
        window.location.href = "./delete_db.php?id=" + id;
    } else {
        (alert("annuler"))
    }
}


function zoom() {

    if (zoomed) {
        this.style.transform = "";
    } else {
        this.style.transform = "scale(1.4)";
    }

    zoomed = !zoomed;
}

let images = document.getElementsByClassName("image_1"); // On prend tous les éléments avec la class "image_1"
let zoomed = false;

for (let image of images) { // on fait une boucle for() qui parcourt le "tableau" images. Chaque élément sera stocké dans "image" puis il effectuera le code dans la boucle

    // On appel la method ".addEventListener" sur "image" pour ajouter l'événement au clique qui appelera la fonction "zoom"
    image.addEventListener('click', zoom);
}