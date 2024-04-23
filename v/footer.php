   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.0.5/datatables.min.js"></script>
   
   <script>    	

//        $('#items').DataTable( {
//        processing: true,
//        serverSide: true,
//        serverMethod: 'post',
//        ajax: {
//        url: './c/c.php?action=getitems'
//        },
//        columns:[{data:'code'},{data:'name'},{data:'brand'},{data:'price'},{data:'stock'}]
//        
//        } );
     
        new DataTable('#items'); 
        var elts = document.getElementsByClassName('formin');
        Array.from(elts).forEach(function(elt){
        elt.addEventListener("keyup", function(event) {
            // Number 13 is the "Enter" key on the keyboard
            if (event.keyCode === 13 || elt.value.length === 3) {
              // Focus on the next sibling
              elt.nextElementSibling.focus();
            }
          });
        });
$(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode === 13) {
      event.preventDefault();
      return false;
    }
  });
});
   </script>
   </body>
</html>

