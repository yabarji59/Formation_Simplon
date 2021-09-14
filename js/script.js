function menuDeroulant(id)
{
    var element = document.getElementById(id);
    var etat = element.style.display;
     
    if (etat == none)
        element.style.display = 'block';
    else
        element.style.display = 'none';
}