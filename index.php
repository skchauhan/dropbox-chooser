<script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="kvjvn015o3ridkz"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="row">
  <div class="small-12 columns">
    <div id="dropbox-container"></div>
    <hr>
    <div id="demo-urls"></div>
  </div>
</div>

<style type="text/css">
</style>
<script type="text/javascript">
    /**
 * Chooser (Drop Box)
 * https://www.dropbox.com/developers/dropins/chooser/js
 */
options = {
    success: function(files) {
      files.forEach(function(file) {
        add_file_to_list(file);
      });
    },
    cancel: function() {
      //optional
    },
    linkType: "direct", // "preview" or "direct"
    multiselect: true, // true or false
    extensions: ['.png', '.jpg', '.pdf', '.doc', '.docx'],
};

var button = Dropbox.createChooseButton(options);
document.getElementById("dropbox-container").appendChild(button);

function add_file_to_list(file) {
  var a   = document.createElement('a');
  a.href = file.link;
  console.log(a.href);
  $("#demo-urls").append('<a href="'+a.href+'" target="blank_">'+a.href+'</a> </br>')


}

</script>
   <div id="container"></div>
    <a id="link"></a>

    <script>
        var button = Dropbox.createChooseButton({
            success: function(files) {
                var linkTag = document.getElementById('link');
                linkTag.href = files[0].link;
                linkTag.textContent = files[0].link;
            },
            linkType: 'direct'
        });
        document.getElementById('container').appendChild(button);
    </script>
