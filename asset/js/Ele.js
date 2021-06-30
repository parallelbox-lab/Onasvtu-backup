$( document ).ready(function() {
  let endpoint = 'http://mobileairtimeng.com/httpapi/power-validate?'
  let apiKey = 'userid=xxx&pass=xxx&user_ref=xxx&service=xxx&meterno=xxx&mtype=xxx&amt=xxx&jsn=json'

  $( ".content a" ).each(function( index, element ) {
    $.ajax({
        url: endpoint + "?key=" + apiKey + " &q=" + $( this ).text(),
        contentType: "application/json",
        dataType: 'json',
        success: function(result){
            $( element ).after(
            '<a href="' + result.url + '"> \n ' +
              '<div class="link-preview"> \n ' +
                '<div class="preview-image" style="background-image:url(' + result.image + ');"></div> \n ' +
                '<div style="width:70%;" class="link-info"> \n ' +
                  '<h4>' + result.title +'</h4> \n ' +
                  '<p>' + result.description +'</p> \n ' +
                '</div><br> \n ' +
                  '<a href="' + result.url + '" class="url-info"><i class="far fa-link"></i>' + result.url + '</a> \n ' +
                '</div></a>');
            $( element ).remove();
        }
    })
  });
});