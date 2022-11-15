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