function validInsc(pURL)
{
  if (pURL != "" && pURL != null)
  {
    $.ajax({
      url: pURL,
      type: 'GET',
      success: function(retour,statut) {
        if (retour.message == "Valide")
          location.reload();
      }
    });
  }
}
